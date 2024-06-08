<?php

namespace App\Filament\Resources\PertaliteResource\Pages;

use App\Filament\Resources\PertaliteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPertalite extends EditRecord
{
    protected static string $resource = PertaliteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    
    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['hasil_penjualan'] = $data['nilai_akhir'] - $data['nilai_awal'];
        $data['total_harga'] = $data['hasil_penjualan'] * $data['harga'];
        return $data;
    }
}
