<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\FotodanJudulResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\FotodanJudulResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFotodanJudul extends EditRecord
{
    protected static string $resource = FotodanJudulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
