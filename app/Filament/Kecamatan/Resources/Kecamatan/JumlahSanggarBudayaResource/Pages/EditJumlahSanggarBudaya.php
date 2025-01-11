<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahSanggarBudayaResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahSanggarBudayaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJumlahSanggarBudaya extends EditRecord
{
    protected static string $resource = JumlahSanggarBudayaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
