<?php

namespace App\Filament\Resources\PertamaxResource\Pages;

use App\Filament\Resources\PertamaxResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPertamaxes extends ListRecords
{
    protected static string $resource = PertamaxResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
