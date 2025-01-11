<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahFasilitasPendukungResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahFasilitasPendukungResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJumlahFasilitasPendukungs extends ListRecords
{
    protected static string $resource = JumlahFasilitasPendukungResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
