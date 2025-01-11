<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahSaranaIbadahResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahSaranaIbadahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJumlahSaranaIbadahs extends ListRecords
{
    protected static string $resource = JumlahSaranaIbadahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
