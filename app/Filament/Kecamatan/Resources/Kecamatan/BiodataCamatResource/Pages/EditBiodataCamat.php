<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\BiodataCamatResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\BiodataCamatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBiodataCamat extends EditRecord
{
    protected static string $resource = BiodataCamatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
