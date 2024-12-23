<?php

namespace App\Filament\Resources\PendudukAgamaResource\Pages;

use App\Filament\Resources\PendudukAgamaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPendudukAgamas extends ListRecords
{
    protected static string $resource = PendudukAgamaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
