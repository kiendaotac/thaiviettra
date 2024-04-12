<?php

namespace App\Filament\Resources\Settings;

use App\Filament\Resources\Settings\MenuResource\Pages;
use App\Filament\Resources\Settings\MenuResource\RelationManagers;
use App\Models\Settings\Menu;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MenuResource extends Resource
{
    use Translatable;

    protected static ?string $model = Menu::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->unique(ignoreRecord: true),
                Forms\Components\Repeater::make('content')->columnSpanFull()
                ->schema([
                    Forms\Components\TextInput::make('name'),
                    Forms\Components\TextInput::make('route'),
                    Forms\Components\Select::make('type')
                    ->options([
                        'router' => 'Router name',
                        'uri' => 'Part of internal url',
                        'url' => 'External url'
                    ])
                    ->selectablePlaceholder(false)
                    ->default('router')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('created_at')->time('d/m/Y H:i'),
                Tables\Columns\TextColumn::make('updated_at')->time('d/m/Y H:i'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMenus::route('/'),
            'create' => Pages\CreateMenu::route('/create'),
            'edit' => Pages\EditMenu::route('/{record}/edit'),
        ];
    }
}
