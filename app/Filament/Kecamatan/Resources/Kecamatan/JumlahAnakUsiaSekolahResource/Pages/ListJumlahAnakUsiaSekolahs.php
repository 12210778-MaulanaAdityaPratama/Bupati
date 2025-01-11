<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahAnakUsiaSekolahResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahAnakUsiaSekolahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJumlahAnakUsiaSekolahs extends ListRecords
{
    protected static string $resource = JumlahAnakUsiaSekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
