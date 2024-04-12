<?php

namespace App\Filament\Fabricator\PageBlocks;

use App\Models\Blog\Post;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class HomeNews extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('home-news')
            ->schema([
                Select::make('posts')
                ->multiple()
                ->searchable()
                ->preload()
                ->options(Post::all()->pluck('title', 'id'))
                ->required()
            ]);
    }

    public static function mutateData(array $data): array
    {
        $data['posts'] = Post::whereIn('id', $data['posts'])->get();
        return $data;
    }
}