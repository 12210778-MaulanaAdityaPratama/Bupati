<?php

namespace App\Filament\Resources\BatasWilayahResource\Pages;

use App\Filament\Resources\BatasWilayahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBatasWilayahs extends ListRecords
{
    protected static string $resource = BatasWilayahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
