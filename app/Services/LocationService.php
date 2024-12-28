<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class LocationService
{
    // Fungsi untuk mengambil data provinsi
    public function getProvinces()
    {
        $response = Http::get(config('services.api_wilayah.url') . '/provinces.json');
        return $response->json();
    }

    // Fungsi untuk mengambil data kota berdasarkan provinsi
    public function getCitiesByProvince($provinceId)
    {
        $response = Http::get(config('services.api_wilayah.url') . "/regencies/{$provinceId}.json");
        return $response->json();
    }

    // Fungsi untuk mengambil data kecamatan berdasarkan kota
    public function getDistrictsByCity($cityId)
    {
        $response = Http::get(config('services.api_wilayah.url') . "/districts/{$cityId}.json");
        return $response->json();
    }

    public function getLocationById($type, $id)
    {
        $response = Http::get(config('services.api_wilayah.url') . "/{$type}/{$id}.json");
        return $response->json();
    }

}
