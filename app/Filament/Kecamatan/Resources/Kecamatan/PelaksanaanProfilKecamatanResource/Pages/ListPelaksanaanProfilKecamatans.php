<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\PelaksanaanProfilKecamatanResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\PelaksanaanProfilKecamatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPelaksanaanProfilKecamatans extends ListRecords
{
    protected static string $resource = PelaksanaanProfilKecamatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
