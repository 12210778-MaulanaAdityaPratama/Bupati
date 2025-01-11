<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahPendudukMiskinResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahPendudukMiskinResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJumlahPendudukMiskins extends ListRecords
{
    protected static string $resource = JumlahPendudukMiskinResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
