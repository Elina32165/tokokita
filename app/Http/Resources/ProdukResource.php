<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProdukResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id_barang'     => $this->id,
            'nama_barang'   => strtoupper($this->nama_produk),
            'harga_jual'    => 'Rp ' . number_format($this->harga, 0, ',', '.'),
            'stok_tersedia' => $this->stok,
            'keterangan'    => $this->deskripsi ?? 'Tidak ada deskripsi',
        ];
    }
}
