<?php

namespace App\Filament\Resources\Products\BrandResource\Pages;

use App\Filament\Resources\Products\BrandResource;
use App\Filament\Exports\Shop\BrandExporter;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBrands extends ListRecords
{
    protected static string $resource = BrandResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ExportAction::make()
                ->exporter(BrandExporter::class),
            Actions\CreateAction::make(),
        ];
    }
}
