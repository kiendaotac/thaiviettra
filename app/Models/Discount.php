<?php

namespace App\Models;

use App\Models\Shop\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Discount extends Model
{
    use HasFactory;
    use HasTranslations;

    public array $translatable = [
        'name'
    ];

    protected $casts = [
        'items'           => 'json',
        'relate_products' => 'json',
        'paper'           => 'json',
    ];

    protected $guarded = [];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
