<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\PemerintahanKecamatanResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\PemerintahanKecamatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPemerintahanKecamatan extends EditRecord
{
    protected static string $resource = PemerintahanKecamatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
