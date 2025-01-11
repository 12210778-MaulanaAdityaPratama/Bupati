<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\UsahaPeternakanResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\UsahaPeternakanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUsahaPeternakan extends EditRecord
{
    protected static string $resource = UsahaPeternakanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
