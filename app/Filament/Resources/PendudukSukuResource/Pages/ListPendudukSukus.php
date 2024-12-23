<?php

namespace App\Filament\Resources\PendudukSukuResource\Pages;

use App\Filament\Resources\PendudukSukuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPendudukSukus extends ListRecords
{
    protected static string $resource = PendudukSukuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
