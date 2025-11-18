<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\CategoryWidget;
use Filament\Pages\Page;
use Filament\Support\Enums\IconPosition;
use BackedEnum;
use UnitEnum;

class InfoPage extends Page
{
    protected static ?string $title = 'Paramètres généraux';
    protected static ?string $navigationLabel = 'Paramètres';
    protected static ?string $slug = 'settings/general';
    protected static string|UnitEnum|null $navigationGroup = 'Administration';
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-adjustments-horizontal';
    protected string $view = 'filament.pages.info-page';
    // protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-cog';

    // protected function getHeaderWidgets(): array
    // {
    //     return [
    //         CategoryWidget::class
    //     ];
    // }
}
