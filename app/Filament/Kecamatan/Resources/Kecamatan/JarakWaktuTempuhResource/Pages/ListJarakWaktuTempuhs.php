<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JarakWaktuTempuhResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JarakWaktuTempuhResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJarakWaktuTempuhs extends ListRecords
{
    protected static string $resource = JarakWaktuTempuhResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
