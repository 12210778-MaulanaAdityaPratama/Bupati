<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahFasilitasPendidikanResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahFasilitasPendidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJumlahFasilitasPendidikans extends ListRecords
{
    protected static string $resource = JumlahFasilitasPendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
