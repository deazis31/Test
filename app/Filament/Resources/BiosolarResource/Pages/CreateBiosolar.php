<?php

namespace App\Filament\Resources\BiosolarResource\Pages;

use App\Filament\Resources\BiosolarResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBiosolar extends CreateRecord
{
    protected static string $resource = BiosolarResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['hasil_penjualan'] = $data['nilai_akhir'] - $data['nilai_awal'];
        $data['total_harga'] = $data['hasil_penjualan'] * $data['harga'];
        return $data;
    }
}
