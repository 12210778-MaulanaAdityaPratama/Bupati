<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\HasilProduksiPerkebunanResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\HasilProduksiPerkebunanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHasilProduksiPerkebunans extends ListRecords
{
    protected static string $resource = HasilProduksiPerkebunanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
