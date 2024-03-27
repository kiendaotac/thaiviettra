<?php

namespace App\Filament\Resources\Products\CategoryResource\Pages;

use App\Filament\Resources\Products\CategoryResource;
use App\Filament\Imports\Shop\CategoryImporter;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategories extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = CategoryResource::class;

    protected function getActions(): array
    {
        return [
//            Actions\ImportAction::make()
//                ->importer(CategoryImporter::class),
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
