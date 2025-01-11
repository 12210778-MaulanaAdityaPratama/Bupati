<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JarakWaktuTempuhResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JarakWaktuTempuhResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJarakWaktuTempuh extends EditRecord
{
    protected static string $resource = JarakWaktuTempuhResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
