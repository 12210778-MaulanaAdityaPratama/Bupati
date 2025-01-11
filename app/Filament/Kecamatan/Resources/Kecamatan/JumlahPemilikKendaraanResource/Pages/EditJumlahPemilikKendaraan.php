<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahPemilikKendaraanResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahPemilikKendaraanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJumlahPemilikKendaraan extends EditRecord
{
    protected static string $resource = JumlahPemilikKendaraanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
