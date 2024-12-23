<?php

namespace App\Filament\Resources\PekerjaanPendudukResource\Pages;

use App\Filament\Resources\PekerjaanPendudukResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPekerjaanPenduduks extends ListRecords
{
    protected static string $resource = PekerjaanPendudukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
