<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahFasilitasKesehatanResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahFasilitasKesehatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJumlahFasilitasKesehatan extends EditRecord
{
    protected static string $resource = JumlahFasilitasKesehatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
