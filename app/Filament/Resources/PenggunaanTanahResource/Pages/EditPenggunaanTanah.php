<?php

namespace App\Filament\Resources\PenggunaanTanahResource\Pages;

use App\Filament\Resources\PenggunaanTanahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenggunaanTanah extends EditRecord
{
    protected static string $resource = PenggunaanTanahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
