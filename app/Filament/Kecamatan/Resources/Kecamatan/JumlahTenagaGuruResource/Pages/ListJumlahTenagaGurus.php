<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahTenagaGuruResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahTenagaGuruResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJumlahTenagaGurus extends ListRecords
{
    protected static string $resource = JumlahTenagaGuruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
