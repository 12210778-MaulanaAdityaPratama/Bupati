<?php

namespace App\Filament\Resources\PenggunaanTanahResource\Pages;

use App\Filament\Resources\PenggunaanTanahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPenggunaanTanahs extends ListRecords
{
    protected static string $resource = PenggunaanTanahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
