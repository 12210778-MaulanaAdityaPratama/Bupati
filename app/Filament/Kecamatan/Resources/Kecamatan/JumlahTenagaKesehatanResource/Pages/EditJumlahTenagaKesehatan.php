<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahTenagaKesehatanResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahTenagaKesehatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJumlahTenagaKesehatan extends EditRecord
{
    protected static string $resource = JumlahTenagaKesehatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
