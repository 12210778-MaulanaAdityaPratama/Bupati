<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\SaranaTelekomunikasiResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\SaranaTelekomunikasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSaranaTelekomunikasi extends EditRecord
{
    protected static string $resource = SaranaTelekomunikasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
