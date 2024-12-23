<?php

namespace App\Filament\Resources\PendudukPertumbuhanResource\Pages;

use App\Filament\Resources\PendudukPertumbuhanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPendudukPertumbuhan extends EditRecord
{
    protected static string $resource = PendudukPertumbuhanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
