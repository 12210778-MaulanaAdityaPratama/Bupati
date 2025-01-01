<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\ProfileResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\ProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProfile extends EditRecord
{
    protected static string $resource = ProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
