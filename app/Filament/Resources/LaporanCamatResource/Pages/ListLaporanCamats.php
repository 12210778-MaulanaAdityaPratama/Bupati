<?php

namespace App\Filament\Resources\LaporanCamatResource\Pages;

use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\LaporanCamatResource;

class ListLaporanCamats extends ListRecords
{
    protected static string $resource = LaporanCamatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getActions(): array
    {
        return [
            Action::make('download')
                ->label('Download PDF')
                ->url(route('laporan-camat.download'))
                ->icon('heroicon-o-download'),
        ];
    }
}
