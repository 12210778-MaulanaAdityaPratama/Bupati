<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\TernakKecilResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\TernakKecilResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTernakKecils extends ListRecords
{
    protected static string $resource = TernakKecilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
