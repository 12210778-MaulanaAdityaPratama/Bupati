<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahIndustriPerabotanResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahIndustriPerabotanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJumlahIndustriPerabotan extends EditRecord
{
    protected static string $resource = JumlahIndustriPerabotanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
