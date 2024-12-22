<?php

namespace App\Filament\Resources\LuasWilayahResource\Pages;

use App\Filament\Resources\LuasWilayahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLuasWilayahs extends ListRecords
{
    protected static string $resource = LuasWilayahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
