<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\AlatTangkapResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\AlatTangkapResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAlatTangkaps extends ListRecords
{
    protected static string $resource = AlatTangkapResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
