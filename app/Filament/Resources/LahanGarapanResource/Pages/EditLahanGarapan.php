<?php

namespace App\Filament\Resources\LahanGarapanResource\Pages;

use App\Filament\Resources\LahanGarapanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLahanGarapan extends EditRecord
{
    protected static string $resource = LahanGarapanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
