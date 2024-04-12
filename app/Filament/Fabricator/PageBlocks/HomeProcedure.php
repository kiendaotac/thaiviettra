<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class HomeProcedure extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('home-procedure')
            ->schema([
                Select::make('title_type')
                    ->options(['image' => 'Hình Ảnh', 'text' => 'Chữ'])
                    ->default('image')
                    ->reactive()
                    ->selectablePlaceholder(false),
                FileUpload::make('title_image')
                    ->image()
                    ->multiple(false)
                    ->hidden(function ($get) {
                        return $get('title_type') !== 'image';
                    }),
                TextInput::make('title_text')
                    ->hidden(fn($get) => $get('title_type') !== 'text'),
                FileUpload::make('image')
                    ->image()
                    ->multiple(false),
                Repeater::make('process')
                ->schema([
                    TextInput::make('step'),
                    TextInput::make('content')
                ])
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}