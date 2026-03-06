<?php

namespace App\Filament\App\Pages;

use BackedEnum;
use Filament\Pages\Page;
use Filament\Panel;
use Filament\Schemas\Schema;
use Illuminate\Contracts\Support\Htmlable;

class Home extends Page
{
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-home';

    protected static ?int $navigationSort = -2;

    protected static string $routePath = '/';

    public static function getNavigationLabel(): string
    {
        return 'Home';
    }

    public static function getRoutePath(Panel $panel): string
    {
        return static::$routePath;
    }

    public function getTitle(): string|Htmlable
    {
        return 'Home';
    }

    public function content(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
            ]);
    }
}
