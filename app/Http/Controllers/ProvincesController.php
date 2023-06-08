<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProvincesController extends Controller
{
    public function index()
    {
        // Mengirim permintaan ke API RajaOngkir
        $response = Http::withHeaders([
            'key' => config('services.rajaongkir.api_key'),
        ])->get('https://api.rajaongkir.com/starter/province');


        // Mendapatkan data JSON dari respons
        $data = $response->json();

        // Memeriksa apakah permintaan berhasil
        if ($response->successful()) {
            // Mendapatkan daftar provinsi
            $provinces = $data['rajaongkir']['results'];


            return view('provinces', compact('provinces'));
        } else {
            // Menampilkan pesan kesalahan jika permintaan gagal
            $error = $data['rajaongkir']['status']['description'];
            return view('error', compact('error'));
        }
    }

    public function showCity($provinceId)
    {
        // Mengirim permintaan ke API RajaOngkir untuk mendapatkan daftar kota berdasarkan provinsi
        $response = Http::withHeaders([
            'key' => config('services.rajaongkir.api_key'),
        ])->get('https://api.rajaongkir.com/starter/city', [
            'province' => $provinceId,
        ]);

        // Memeriksa apakah permintaan berhasil
        if ($response->successful()) {
            // Mendapatkan data JSON dari respons
            $data = $response->json();

            // Mendapatkan daftar kota berdasarkan provinsi
            $city = $data['rajaongkir']['results'];

            return view('city', compact('city'));
        } else {
            // Menampilkan pesan kesalahan jika permintaan gagal
            $error = $data['rajaongkir']['status']['description'];
            return view('error', compact('error'));
        }
    }
}
