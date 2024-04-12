<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class HomeSlider extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('home-slider')
            ->schema([
                FileUpload::make('images')
                ->image()
                ->multiple()
                ->maxFiles(10)
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}