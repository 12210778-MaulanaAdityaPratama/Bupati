<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\TernakBesarResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\TernakBesarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTernakBesar extends EditRecord
{
    protected static string $resource = TernakBesarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
