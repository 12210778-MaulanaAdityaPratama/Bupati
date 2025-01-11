<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\TernakBesarResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\TernakBesarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTernakBesars extends ListRecords
{
    protected static string $resource = TernakBesarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
