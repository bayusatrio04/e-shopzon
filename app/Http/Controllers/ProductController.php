<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function getProducts()
    {
        $response = Http::withHeaders([
            "X-RapidAPI-Host" => "amazon-product-price-data.p.rapidapi.com",
            "X-RapidAPI-Key" => "cb430d4758msh072f90134da1b7bp17f5e1jsnb5f8e51931bc",
        ])->get("https://amazon-product-price-data.p.rapidapi.com/product", [
            "asins" => "B005YQZ1KE,B074R8RQQ2",
            "locale" => "US",
        ]);

        if ($response->successful()) {
            $products = $response->json();
            $exchangeRate = 14000;
            return view('welcome', compact('products','exchangeRate'));
        } else {
            $error = $response->body();
            return "API request error: " . $error;
        }
    }
        public function showProductDetail($asin)
        {
            // Lakukan permintaan API untuk mendapatkan detail produk berdasarkan ID ASIN
            $response = Http::get('https://amazon-product-price-data.p.rapidapi.com/product"' . $asin);

            if ($response->successful()) {
                $product = $response->json();

                // Kemudian tampilkan view detail produk dengan data yang diperoleh dari API
                return view('product_detail', compact('product'));
            } else {
                $error = $response->json();
                return "API request error: " . $error['message'];
            }
        }


}
