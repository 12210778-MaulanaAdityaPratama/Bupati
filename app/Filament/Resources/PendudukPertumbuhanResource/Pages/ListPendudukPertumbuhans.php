<?php

namespace App\Filament\Resources\PendudukPertumbuhanResource\Pages;

use App\Filament\Resources\PendudukPertumbuhanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPendudukPertumbuhans extends ListRecords
{
    protected static string $resource = PendudukPertumbuhanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
