<?php

namespace App\Filament\Fabricator\PageBlocks;

use App\Models\Blog\Post;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class HomeStory extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('home-story')
            ->schema([
                Select::make('media_type')
                    ->options(['image' => 'Hình ảnh', 'video' => 'Video Youtube'])
                    ->default('image')
                    ->reactive()
                    ->selectablePlaceholder(false),
                FileUpload::make('media_image')
                    ->image()
                    ->multiple(false)
                    ->hidden(function ($get) {
                        return $get('media_type') !== 'image';
                    }),
                TextInput::make('media_video')
                    ->url()
                    ->hidden(fn($get) => $get('media_type') !== 'video'),
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
                Select::make('post')
                    ->required()
                    ->options(Post::all()->pluck('title', 'id'))
                    ->searchable()
            ]);
    }

    public static function mutateData(array $data): array
    {
        $data['media_video'] = Str::replace('/watch?v=', '/embed/', $data['media_video']);
        return $data;
    }
}