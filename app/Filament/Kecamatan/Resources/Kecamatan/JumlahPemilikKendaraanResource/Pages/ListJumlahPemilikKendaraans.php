<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahPemilikKendaraanResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahPemilikKendaraanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJumlahPemilikKendaraans extends ListRecords
{
    protected static string $resource = JumlahPemilikKendaraanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
