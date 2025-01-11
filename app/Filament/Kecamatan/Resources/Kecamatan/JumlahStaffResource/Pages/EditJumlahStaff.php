<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahStaffResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahStaffResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJumlahStaff extends EditRecord
{
    protected static string $resource = JumlahStaffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
