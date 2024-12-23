<?php

namespace App\Filament\Resources\PendudukPendidikanResource\Pages;

use App\Filament\Resources\PendudukPendidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPendudukPendidikan extends EditRecord
{
    protected static string $resource = PendudukPendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
