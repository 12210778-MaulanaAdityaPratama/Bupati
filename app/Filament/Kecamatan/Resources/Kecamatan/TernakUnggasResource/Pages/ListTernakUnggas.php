<?php

namespace App\Filament\Kecamatan\Resources\Kecamatan\TernakUnggasResource\Pages;

use App\Filament\Kecamatan\Resources\Kecamatan\TernakUnggasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTernakUnggas extends ListRecords
{
    protected static string $resource = TernakUnggasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
