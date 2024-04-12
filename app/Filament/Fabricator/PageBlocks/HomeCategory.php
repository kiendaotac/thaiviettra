<?php

namespace App\Filament\Fabricator\PageBlocks;

use App\Models\Shop\Category;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class HomeCategory extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('home-category')
            ->schema([
                TextInput::make('number_of_category')
                ->integer()
                ->minValue(0)
            ]);
    }

    public static function mutateData(array $data): array
    {
        $data['categories'] = Category::query()->whereNull('parent_id')->where('is_visible', 1)->with('media')->limit($data['number_of_category'] ?? 6)->latest()->get();
        return $data;
    }
}