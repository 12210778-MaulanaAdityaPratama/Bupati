<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\FotodanJudulResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\FotodanJudulResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFotodanJuduls extends ListRecords
{
    protected static string $resource = FotodanJudulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
