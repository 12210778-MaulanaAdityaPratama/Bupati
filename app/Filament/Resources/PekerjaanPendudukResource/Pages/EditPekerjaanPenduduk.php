<?php

namespace App\Filament\Resources\PekerjaanPendudukResource\Pages;

use App\Filament\Resources\PekerjaanPendudukResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPekerjaanPenduduk extends EditRecord
{
    protected static string $resource = PekerjaanPendudukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
