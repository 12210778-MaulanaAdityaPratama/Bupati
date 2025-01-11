<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\PangkatdanGolonganResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\PangkatdanGolonganResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPangkatdanGolongan extends EditRecord
{
    protected static string $resource = PangkatdanGolonganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
