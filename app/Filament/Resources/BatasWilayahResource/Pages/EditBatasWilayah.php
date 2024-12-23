<?php

namespace App\Filament\Resources\BatasWilayahResource\Pages;

use App\Filament\Resources\BatasWilayahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBatasWilayah extends EditRecord
{
    protected static string $resource = BatasWilayahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
