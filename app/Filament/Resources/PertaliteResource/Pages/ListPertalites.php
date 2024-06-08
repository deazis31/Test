<?php

namespace App\Filament\Resources\PertaliteResource\Pages;

use App\Filament\Resources\PertaliteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPertalites extends ListRecords
{
    protected static string $resource = PertaliteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
