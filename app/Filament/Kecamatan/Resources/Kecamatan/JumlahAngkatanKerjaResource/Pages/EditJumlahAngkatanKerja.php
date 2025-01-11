<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahAngkatanKerjaResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahAngkatanKerjaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJumlahAngkatanKerja extends EditRecord
{
    protected static string $resource = JumlahAngkatanKerjaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
