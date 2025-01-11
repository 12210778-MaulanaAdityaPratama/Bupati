<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\PerikananDaratResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\PerikananDaratResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPerikananDarat extends EditRecord
{
    protected static string $resource = PerikananDaratResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
