<?php

namespace App\Filament\Resources\PendudukAgamaResource\Pages;

use App\Filament\Resources\PendudukAgamaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPendudukAgama extends EditRecord
{
    protected static string $resource = PendudukAgamaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
