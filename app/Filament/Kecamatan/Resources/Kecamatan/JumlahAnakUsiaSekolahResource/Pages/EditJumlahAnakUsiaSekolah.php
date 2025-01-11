<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\JumlahAnakUsiaSekolahResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\JumlahAnakUsiaSekolahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJumlahAnakUsiaSekolah extends EditRecord
{
    protected static string $resource = JumlahAnakUsiaSekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
