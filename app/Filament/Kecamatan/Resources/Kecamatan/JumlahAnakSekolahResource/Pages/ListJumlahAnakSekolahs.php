<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahAnakSekolahResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahAnakSekolahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJumlahAnakSekolahs extends ListRecords
{
    protected static string $resource = JumlahAnakSekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
