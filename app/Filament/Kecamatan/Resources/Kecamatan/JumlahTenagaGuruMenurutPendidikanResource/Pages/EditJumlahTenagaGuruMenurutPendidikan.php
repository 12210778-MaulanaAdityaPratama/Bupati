<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahTenagaGuruMenurutPendidikanResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahTenagaGuruMenurutPendidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJumlahTenagaGuruMenurutPendidikan extends EditRecord
{
    protected static string $resource = JumlahTenagaGuruMenurutPendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
