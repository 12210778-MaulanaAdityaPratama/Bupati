<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\AirBersihResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\AirBersihResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAirBersihs extends ListRecords
{
    protected static string $resource = AirBersihResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
