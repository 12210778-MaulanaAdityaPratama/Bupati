<?php

namespace App\Filament\Resources\AturKecamatanResource\Pages;

use App\Filament\Resources\AturKecamatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAturKecamatan extends EditRecord
{
    protected static string $resource = AturKecamatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
