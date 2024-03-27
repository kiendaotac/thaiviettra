<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Menu extends Model
{
    use HasTranslations;
    use HasFactory;

    public array $translatable = [
        'content',
    ];

    protected $fillable = ['name', 'content'];
}
