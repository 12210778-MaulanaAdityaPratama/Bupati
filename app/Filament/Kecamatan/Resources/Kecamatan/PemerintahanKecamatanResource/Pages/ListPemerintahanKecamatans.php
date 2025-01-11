<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\PemerintahanKecamatanResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\PemerintahanKecamatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPemerintahanKecamatans extends ListRecords
{
    protected static string $resource = PemerintahanKecamatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
