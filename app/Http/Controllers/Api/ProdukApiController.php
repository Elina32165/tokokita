<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Http\Resources\ProdukResource;
use Illuminate\Http\Request;

class ProdukApiController extends Controller
{
    public function index()
    {
        $produk = Produk::all();

        return ProdukResource::collection($produk);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
