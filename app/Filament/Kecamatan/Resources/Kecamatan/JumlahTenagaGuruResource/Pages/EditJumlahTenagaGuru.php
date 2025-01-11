<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahTenagaGuruResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahTenagaGuruResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJumlahTenagaGuru extends EditRecord
{
    protected static string $resource = JumlahTenagaGuruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
