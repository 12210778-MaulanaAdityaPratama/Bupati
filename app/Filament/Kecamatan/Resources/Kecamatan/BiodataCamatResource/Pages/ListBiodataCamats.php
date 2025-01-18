<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\BiodataCamatResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\BiodataCamatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBiodataCamats extends ListRecords
{
    protected static string $resource = BiodataCamatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
