<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\LaporanCamatKecamatanResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\LaporanCamatKecamatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporanCamatKecamatan extends EditRecord
{
    protected static string $resource = LaporanCamatKecamatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
