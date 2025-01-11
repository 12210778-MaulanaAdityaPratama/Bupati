<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\AlatTangkapResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\AlatTangkapResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAlatTangkap extends EditRecord
{
    protected static string $resource = AlatTangkapResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
