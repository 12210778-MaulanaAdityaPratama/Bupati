<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\SaranaTelekomunikasiResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\SaranaTelekomunikasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSaranaTelekomunikasis extends ListRecords
{
    protected static string $resource = SaranaTelekomunikasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
