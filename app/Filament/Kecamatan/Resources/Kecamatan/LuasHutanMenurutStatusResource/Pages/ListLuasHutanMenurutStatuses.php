<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\LuasHutanMenurutStatusResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\LuasHutanMenurutStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLuasHutanMenurutStatuses extends ListRecords
{
    protected static string $resource = LuasHutanMenurutStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
