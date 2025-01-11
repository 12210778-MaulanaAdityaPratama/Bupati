<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\TanahPemdaDiKecamatanResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\TanahPemdaDiKecamatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTanahPemdaDiKecamatan extends EditRecord
{
    protected static string $resource = TanahPemdaDiKecamatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
