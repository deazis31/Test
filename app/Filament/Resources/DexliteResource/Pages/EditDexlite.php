<?php

namespace App\Filament\Resources\DexliteResource\Pages;

use App\Filament\Resources\DexliteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDexlite extends EditRecord
{
    protected static string $resource = DexliteResource::class;

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
