<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahObyekWisataResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahObyekWisataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJumlahObyekWisata extends EditRecord
{
    protected static string $resource = JumlahObyekWisataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
