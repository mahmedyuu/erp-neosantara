<?php

namespace App\Filament\Resources\Barangs\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BarangsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_barang')
                    ->label('Nama Barang')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('kategori')
                    ->label('Kategori')
                    ->searchable(),

                TextColumn::make('stok')
                    ->label('Stok')
                    ->sortable(),

                TextColumn::make('harga')
                    ->label('Harga')
                    ->money('IDR', locale: 'id')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                \Filament\Actions\EditAction::make(),
            ])
            ->toolbarActions([
                \Filament\Actions\BulkActionGroup::make([
                    \Filament\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
