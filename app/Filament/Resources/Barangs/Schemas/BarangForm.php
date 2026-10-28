<?php

namespace App\Filament\Resources\Barangs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BarangForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('nama_barang')
                ->label('Nama Barang')
                ->required()
                ->maxLength(255),

            TextInput::make('kategori')
                ->label('Kategori')
                ->maxLength(255),

            TextInput::make('stok')
                ->label('Stok')
                ->numeric()
                ->default(0)
                ->required()
                ->minValue(0),

            TextInput::make('harga')
                ->label('Harga')
                ->numeric()
                ->prefix('Rp')
                ->default(0)
                ->required()
                ->minValue(0),
        ]);
    }
}
