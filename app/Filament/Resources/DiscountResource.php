<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DiscountResource\Pages;
use App\Filament\Resources\DiscountResource\RelationManagers;
use App\Models\Discount;
use App\Models\Shop\Product;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class DiscountResource extends Resource
{
    use Translatable;

    protected static ?string $model = Discount::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->label('Tên khuyến mại')
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (string $operation, $state, Set $set) {
                        if ($operation !== 'create') {
                            return;
                        }
                        $set('slug', Str::slug($state));
                    }),
                TextInput::make('slug')
                    ->required()
                    ->label('Slug')
                    ->disabled()
                    ->dehydrated()
                    ->required()
                    ->maxLength(255)
                    ->unique(Discount::class, 'slug', ignoreRecord: true),
                Select::make('product_id')
                    ->columnSpanFull()
                    ->label('Sản phẩm')
                    ->options(fn() => Product::query()->latest()->pluck('name', 'id')),
                FileUpload::make('banner')
                    ->imageEditor()
                    ->label('Banner')
                    ->columnSpanFull(),
                Repeater::make('paper')
                    ->label('Giấy tờ')
                    ->columnSpanFull()
                    ->schema([
                        FileUpload::make('image')->image()->label('Hình ảnh giấy tờ')
                    ]),
                Select::make('items')->label('Sản phẩm bán chạy')
                    ->searchable()
                    ->preload()
                    ->columnSpanFull()
                    ->multiple()
                    ->options(fn() => Product::query()->latest()->pluck('name', 'id')),
                Select::make('relate_products')->label('Sản phẩm liên quan')
                    ->searchable()
                    ->preload()
                    ->columnSpanFull()
                    ->multiple()
                    ->options(fn() => Product::query()->latest()->pluck('name', 'id')),
                DateTimePicker::make('start_time')->label('Thời gian bắt đầu'),
                DateTimePicker::make('end_time')->label('Thời gian bắt đầu'),
                Toggle::make('status')
                    ->onColor('success')
                    ->offColor('danger')
                    ->label('Trạng thái')
                    ->afterStateHydrated(function (Toggle $component, $state) {
                        $component->state($state === 'active');
                    })
                    ->dehydrateStateUsing(fn ($state): string => $state ? 'active' : 'inactive')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('start_time')->dateTime('d/m/Y H:i:s'),
                Tables\Columns\TextColumn::make('end_time')->dateTime('d/m/Y H:i:s'),
                Tables\Columns\TextColumn::make('status'),
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
            'index' => Pages\ListDiscounts::route('/'),
            'create' => Pages\CreateDiscount::route('/create'),
            'edit' => Pages\EditDiscount::route('/{record}/edit'),
        ];
    }


}
