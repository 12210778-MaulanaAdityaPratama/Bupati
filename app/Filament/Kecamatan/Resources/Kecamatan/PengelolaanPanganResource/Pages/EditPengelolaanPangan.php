<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\PengelolaanPanganResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\PengelolaanPanganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPengelolaanPangan extends EditRecord
{
    protected static string $resource = PengelolaanPanganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
