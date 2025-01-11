<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\PerikananDaratResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\PerikananDaratResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPerikananDarats extends ListRecords
{
    protected static string $resource = PerikananDaratResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
