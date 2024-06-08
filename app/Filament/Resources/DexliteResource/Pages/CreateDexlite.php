<?php

namespace App\Filament\Resources\DexliteResource\Pages;

use App\Filament\Resources\DexliteResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDexlite extends CreateRecord
{
    protected static string $resource = DexliteResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['hasil_penjualan'] = $data['nilai_akhir'] - $data['nilai_awal'];
        $data['total_harga'] = $data['hasil_penjualan'] * $data['harga'];
        return $data;
    }
}
