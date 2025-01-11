<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahAngkatanKerjaResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahAngkatanKerjaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJumlahAngkatanKerjas extends ListRecords
{
    protected static string $resource = JumlahAngkatanKerjaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
