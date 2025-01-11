<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\LuasHutanMenurutPenggunaanResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\LuasHutanMenurutPenggunaanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLuasHutanMenurutPenggunaan extends EditRecord
{
    protected static string $resource = LuasHutanMenurutPenggunaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
