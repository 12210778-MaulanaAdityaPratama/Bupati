<?php

namespace App\Filament\Resources\KategoriPenyelenggaraResource\Pages;

use App\Filament\Resources\KategoriPenyelenggaraResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriPenyelenggaras extends ListRecords
{
    protected static string $resource = KategoriPenyelenggaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
