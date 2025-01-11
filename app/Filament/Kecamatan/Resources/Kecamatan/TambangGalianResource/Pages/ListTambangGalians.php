<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\TambangGalianResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\TambangGalianResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTambangGalians extends ListRecords
{
    protected static string $resource = TambangGalianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
