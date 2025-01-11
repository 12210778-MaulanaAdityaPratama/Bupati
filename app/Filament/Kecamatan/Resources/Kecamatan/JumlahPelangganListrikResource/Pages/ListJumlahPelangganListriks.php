<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahPelangganListrikResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahPelangganListrikResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJumlahPelangganListriks extends ListRecords
{
    protected static string $resource = JumlahPelangganListrikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
