<?php

namespace App\Filament\Resources\LahanGarapanResource\Pages;

use App\Filament\Resources\LahanGarapanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLahanGarapans extends ListRecords
{
    protected static string $resource = LahanGarapanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
