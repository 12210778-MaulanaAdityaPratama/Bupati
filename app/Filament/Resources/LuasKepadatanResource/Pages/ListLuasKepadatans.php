<?php

namespace App\Filament\Resources\LuasKepadatanResource\Pages;

use App\Filament\Resources\LuasKepadatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLuasKepadatans extends ListRecords
{
    protected static string $resource = LuasKepadatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
