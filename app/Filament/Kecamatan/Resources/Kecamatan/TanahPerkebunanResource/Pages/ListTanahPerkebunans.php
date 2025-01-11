<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\TanahPerkebunanResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\TanahPerkebunanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTanahPerkebunans extends ListRecords
{
    protected static string $resource = TanahPerkebunanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
