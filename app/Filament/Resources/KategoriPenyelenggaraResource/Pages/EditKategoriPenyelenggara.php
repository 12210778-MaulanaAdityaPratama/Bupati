<?php

namespace App\Filament\Resources\KategoriPenyelenggaraResource\Pages;

use App\Filament\Resources\KategoriPenyelenggaraResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriPenyelenggara extends EditRecord
{
    protected static string $resource = KategoriPenyelenggaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
