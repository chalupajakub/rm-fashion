<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Grid;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
    ->components([
        TextInput::make('name')
            ->required()
            ->string()
            ->maxLength(255)
            ->placeholder('Product name'),

        TextInput::make('code')
            ->string()
            ->minLength(10)
            ->maxLength(10)
            ->unique(ignoreRecord: true)
            ->placeholder('Product code'),

        Textarea::make('description')
            ->nullable()
            ->string()
            ->maxLength(1000)
            ->columnSpanFull()
            ->placeholder('Product description'),

        FileUpload::make('image')
            ->label('Main image')
            ->image()
            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg'])
            ->directory('images/products')
            ->maxSize(2048)
            ->imageEditor()
            ->columnSpanFull(),

        TextInput::make('price')
            ->required()
            ->numeric()
            ->minValue(0)
            ->step(0.01) 
            ->prefix('Kč')
            ->default(0)
            ->placeholder('Product price'),

        TextInput::make('stock')
            ->required()
            ->integer()
            ->minValue(0)
            ->default(0)
            ->placeholder('Product stock'),

            Repeater::make('images') 
                ->label('Images')
                ->relationship('images')
                ->columnSpanFull()
                ->schema([
                    FileUpload::make('image')
                        ->image()
                        ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg'])
                        ->directory('images/products')
                        ->maxSize(2048)
                        ->required(),
                    ])
                ->grid(5)
                ->addActionLabel('Add Gallery Image')
        ]);
    }
}
