<?php

namespace App\Filament\Resources\BiosolarResource\Pages;

use App\Filament\Resources\BiosolarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBiosolars extends ListRecords
{
    protected static string $resource = BiosolarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
