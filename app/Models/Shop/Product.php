<?php

namespace App\Models\Shop;

use App\Models\Comment;
use App\Models\Discount;
use App\Models\ProductVariant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Product extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use HasTranslations;

    /** @var string[] */
    public $translatable = [
        'name',
        'description',
    ];

    /**
     * @var string
     */
    protected $table = 'shop_products';

    protected $guarded = [];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'featured' => 'boolean',
        'is_visible' => 'boolean',
        'backorder' => 'boolean',
        'requires_shipping' => 'boolean',
        'published_at' => 'date',
    ];

    /** @return BelongsTo<Brand,self> */
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class, 'shop_brand_id');
    }

    /** @return BelongsToMany<Category> */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'shop_category_product', 'shop_product_id', 'shop_category_id')->withTimestamps();
    }

    /** @return MorphMany<Comment> */
    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function discounts(): MorphMany
    {
        return $this->morphMany(Discount::class, 'discountable');
    }

    public function variants(): HasMany
    {
        return $this->hasMany(ProductVariant::class);
    }
}
