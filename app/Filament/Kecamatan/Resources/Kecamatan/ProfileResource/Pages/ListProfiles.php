<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\ProfileResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\ProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProfiles extends ListRecords
{
    protected static string $resource = ProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
