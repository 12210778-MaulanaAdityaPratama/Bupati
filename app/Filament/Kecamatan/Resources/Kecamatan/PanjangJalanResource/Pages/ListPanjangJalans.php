<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\PanjangJalanResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\PanjangJalanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPanjangJalans extends ListRecords
{
    protected static string $resource = PanjangJalanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
