<?php

namespace App\Filament\Resources\Products\ProductResource\Pages;

use App\Filament\Resources\Products\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProduct extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = ProductResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
