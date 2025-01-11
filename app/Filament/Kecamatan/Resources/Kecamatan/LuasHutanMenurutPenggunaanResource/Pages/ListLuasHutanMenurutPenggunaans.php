<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\LuasHutanMenurutPenggunaanResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\LuasHutanMenurutPenggunaanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLuasHutanMenurutPenggunaans extends ListRecords
{
    protected static string $resource = LuasHutanMenurutPenggunaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
