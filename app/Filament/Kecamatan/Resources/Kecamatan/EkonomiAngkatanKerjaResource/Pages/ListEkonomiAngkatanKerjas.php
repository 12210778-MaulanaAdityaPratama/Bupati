<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\EkonomiAngkatanKerjaResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\EkonomiAngkatanKerjaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEkonomiAngkatanKerjas extends ListRecords
{
    protected static string $resource = EkonomiAngkatanKerjaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
