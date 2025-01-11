<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\PelaksanaanProfilKecamatanResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\PelaksanaanProfilKecamatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPelaksanaanProfilKecamatan extends EditRecord
{
    protected static string $resource = PelaksanaanProfilKecamatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
