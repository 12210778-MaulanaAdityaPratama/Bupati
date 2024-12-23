<?php

namespace App\Filament\Resources\PendudukSukuResource\Pages;

use App\Filament\Resources\PendudukSukuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPendudukSuku extends EditRecord
{
    protected static string $resource = PendudukSukuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
