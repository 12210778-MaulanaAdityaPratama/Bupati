<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\PrasaranaPemerintahanResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\PrasaranaPemerintahanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPrasaranaPemerintahans extends ListRecords
{
    protected static string $resource = PrasaranaPemerintahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
