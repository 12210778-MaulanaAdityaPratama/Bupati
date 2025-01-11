<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\AktivitasPerekonomianResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\AktivitasPerekonomianResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAktivitasPerekonomian extends EditRecord
{
    protected static string $resource = AktivitasPerekonomianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
