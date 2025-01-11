<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\PangkatdanGolonganResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\PangkatdanGolonganResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPangkatdanGolongans extends ListRecords
{
    protected static string $resource = PangkatdanGolonganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
