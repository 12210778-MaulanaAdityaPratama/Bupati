<?php

namespace App\Filament\Resources\AturKecamatanResource\Pages;

use App\Filament\Resources\AturKecamatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAturKecamatans extends ListRecords
{
    protected static string $resource = AturKecamatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
