<?php

namespace App\Filament\Widgets;

use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CategoryWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Registed user', '111')
            ->description('-3% increase')
            ->descriptionIcon('heroicon-m-arrow-trending-down', IconPosition::Before)
            ->color('danger'),
            Stat::make('Registed category', '4')
            ->description("+1 since last month")
            ->descriptionIcon('heroicon-m-arrow-trending-up', IconPosition::Before)
            ->color('success'),
        ];
    }
}
