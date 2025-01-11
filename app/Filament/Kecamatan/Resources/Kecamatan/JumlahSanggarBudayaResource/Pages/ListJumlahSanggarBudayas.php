<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahSanggarBudayaResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahSanggarBudayaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJumlahSanggarBudayas extends ListRecords
{
    protected static string $resource = JumlahSanggarBudayaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
