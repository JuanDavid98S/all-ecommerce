<?php

namespace App\Filament\Resources;

use App\Enums\DiscountTypeEnum;
use App\Enums\ProductStatusEnum;
use App\Filament\Resources\DiscountResource\Pages;
use App\Filament\Resources\DiscountResource\RelationManagers;
use App\Models\Discount;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DiscountResource extends Resource
{
    protected static ?string $model = Discount::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->required(),
                TextInput::make('description')
                ->required(),
                Select::make('type')
                ->options([
                    DiscountTypeEnum::VALUE->value => 'Value',
                    DiscountTypeEnum::PERCENTAGE->value => 'Percentage'
                ]),
                TextInput::make('amount')
                ->required(),
                Select::make('product_id')
                ->relationship('products', 'name')
                ->searchable()
                ->preload()
                ->required()
                ->createOptionForm([
                    TextInput::make('name')
                    ->required()
                    ->maxLength(100),
                    TextInput::make('price')
                    ->required(),
                    Select::make('status')
                    ->options([
                        ProductStatusEnum::ENABLED->value => 'Enabled',
                        ProductStatusEnum::DISABLED->value => 'Disabled',
                        ProductStatusEnum::DRAFT->value => 'Draft'
                    ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('description'),
                TextColumn::make('amount'),
                TextColumn::make('products.name'),
                TextColumn::make('type')
            ])
            ->filters([
                //
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
