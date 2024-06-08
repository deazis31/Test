<?php

namespace App\Filament\Resources\PertamaxResource\Pages;

use App\Filament\Resources\PertamaxResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePertamax extends CreateRecord
{
    protected static string $resource = PertamaxResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['hasil_penjualan'] = $data['nilai_akhir'] - $data['nilai_awal'];
        $data['total_harga'] = $data['hasil_penjualan'] * $data['harga'];
        return $data;
    }
}
