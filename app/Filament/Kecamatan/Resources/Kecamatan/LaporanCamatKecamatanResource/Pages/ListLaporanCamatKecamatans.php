<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\LaporanCamatKecamatanResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\LaporanCamatKecamatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaporanCamatKecamatans extends ListRecords
{
    protected static string $resource = LaporanCamatKecamatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
