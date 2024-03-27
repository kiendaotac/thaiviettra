<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasTranslations;

    use HasFactory;

    public array $translatable = [
        'value'
    ];
    protected $fillable = ['key', 'value'];
}
