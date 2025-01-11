<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahFasilitasPendidikanResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahFasilitasPendidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJumlahFasilitasPendidikan extends EditRecord
{
    protected static string $resource = JumlahFasilitasPendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
