<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\UsahaTambangGalianResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\UsahaTambangGalianResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUsahaTambangGalian extends EditRecord
{
    protected static string $resource = UsahaTambangGalianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
