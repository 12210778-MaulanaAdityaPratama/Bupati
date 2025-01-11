<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\TingkatPendidikanAparatKecamatanResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\TingkatPendidikanAparatKecamatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTingkatPendidikanAparatKecamatans extends ListRecords
{
    protected static string $resource = TingkatPendidikanAparatKecamatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
