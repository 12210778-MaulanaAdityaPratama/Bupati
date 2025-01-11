<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahPendudukMiskinResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahPendudukMiskinResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJumlahPendudukMiskin extends EditRecord
{
    protected static string $resource = JumlahPendudukMiskinResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
