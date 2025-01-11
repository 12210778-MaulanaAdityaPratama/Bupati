<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahTenagaGuruMenurutPendidikanResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahTenagaGuruMenurutPendidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJumlahTenagaGuruMenurutPendidikans extends ListRecords
{
    protected static string $resource = JumlahTenagaGuruMenurutPendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
