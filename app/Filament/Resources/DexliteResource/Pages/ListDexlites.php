<?php

namespace App\Filament\Resources\DexliteResource\Pages;

use App\Filament\Resources\DexliteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDexlites extends ListRecords
{
    protected static string $resource = DexliteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
