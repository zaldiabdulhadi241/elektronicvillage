<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class getApi extends Controller
{
    public function index()
    {
        // $response = Http::withHeaders([
        //     'key' => config('rajaongkir.apiKey'),
        // ])->get('https://api.rajaongkir.com/starter/province');

        // return $response->body();

        $response = Http::asForm()->withHeaders([
            'key' => config('rajaongkir.apiKey'),
        ])->post('https://api.rajaongkir.com/starter/cost', [
            'origin' => 501,
            'destination' => 114,
            'weight' => 1700,
            'courier' => 'jne'
        ]);

        return $response['rajaongkir']['results'];
    }
}
