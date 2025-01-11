<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\HasilProduksiPerkebunanResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\HasilProduksiPerkebunanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHasilProduksiPerkebunan extends EditRecord
{
    protected static string $resource = HasilProduksiPerkebunanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
