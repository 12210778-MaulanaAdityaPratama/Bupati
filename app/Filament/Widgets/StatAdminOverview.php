<?php

namespace App\Filament\Widgets;

use App\Models\Berita;
use App\Models\LaporanHarianCamat;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatAdminOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Users', User::query()->count())
                ->description('Jumlah Semua Admin')
                ->color('success'),
            Stat::make('Berita', Berita::query()->count())
                ->description('Jumlah Berita')
                ->color('danger'),
            Stat::make('Laporan Camat', LaporanHarianCamat::query()->count())
                ->description('Jumlah Laporan')
                ->color('success'),
        ];
    }
}
