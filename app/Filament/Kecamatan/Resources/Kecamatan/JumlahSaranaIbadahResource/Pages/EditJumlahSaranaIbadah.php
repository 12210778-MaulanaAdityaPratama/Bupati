<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahSaranaIbadahResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahSaranaIbadahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJumlahSaranaIbadah extends EditRecord
{
    protected static string $resource = JumlahSaranaIbadahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
