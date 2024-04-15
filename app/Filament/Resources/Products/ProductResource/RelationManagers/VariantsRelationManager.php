<?php

namespace App\Filament\Resources\Products\ProductResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Number;

class VariantsRelationManager extends RelationManager
{
    protected static string $relationship = 'variants';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('weight')
                    ->required()
                    ->integer()
                    ->minValue(0)
                    ->label('Cân nặng (gram)'),
                Forms\Components\TextInput::make('old_price')
                    ->required()
                    ->integer()
                    ->minValue(0)
                    ->label('Giá ban đầu'),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->integer()
                    ->minValue(0)
                    ->label('Giá niêm yết')
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('weight')->label('Cân nặng(gram)')->formatStateUsing(fn($state) => Number::format($state)),
                Tables\Columns\TextColumn::make('old_price')->label('Giá ban đầu')->formatStateUsing(fn($state) => Number::currency($state, 'vnd', 'vi')),
                Tables\Columns\TextColumn::make('price')->label('Giá niêm yết')->formatStateUsing(fn($state) => Number::currency($state, 'vnd', 'vi')),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
