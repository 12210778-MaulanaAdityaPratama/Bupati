<?php

namespace App\Filament\Resources\LaporanCamatResource\Pages;

use App\Filament\Resources\LaporanCamatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaporanCamat extends EditRecord
{
    protected static string $resource = LaporanCamatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
