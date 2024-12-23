<?php

namespace App\Filament\Resources\PendudukUmurResource\Pages;

use App\Filament\Resources\PendudukUmurResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPendudukUmur extends EditRecord
{
    protected static string $resource = PendudukUmurResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
