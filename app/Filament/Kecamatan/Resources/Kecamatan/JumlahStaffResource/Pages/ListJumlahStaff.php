<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahStaffResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahStaffResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJumlahStaff extends ListRecords
{
    protected static string $resource = JumlahStaffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
