<?php

namespace App\Filament\Fabricator\PageBlocks;

use App\Models\Shop\Product;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class HomeSpecialProduct extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('home-special-product')
            ->schema([
                Select::make('products')
                    ->multiple()
                    ->searchable()
                    ->preload()
                    ->options(Product::all()->pluck('name', 'id'))
                    ->required()
            ]);
    }

    public static function mutateData(array $data): array
    {
        $data['products'] = Product::whereIn('id', $data['products'])->with('media')->get();

        return $data;
    }
}