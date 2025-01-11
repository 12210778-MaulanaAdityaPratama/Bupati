<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\PrasaranaPemerintahDesaResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\PrasaranaPemerintahDesaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPrasaranaPemerintahDesa extends EditRecord
{
    protected static string $resource = PrasaranaPemerintahDesaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
