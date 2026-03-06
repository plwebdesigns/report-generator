<?php

namespace App\Filament\App\Pages;

use BackedEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Pages\Page;
use Filament\Panel;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Contracts\Support\Htmlable;

class Home extends Page
{
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-home';

    protected static ?int $navigationSort = -2;

    protected static string $routePath = '/';

    /**
     * @var array<string, mixed>
     */
    public array $data = [];

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
                Section::make('Upload file')
                    ->schema([
                        Form::make([
                            FileUpload::make('file')
                                ->label('Drop a file here or click to browse')
                                ->maxFiles(1)
                                ->required(),
                        ])->statePath('data'),
                    ]),
            ]);
    }
}
