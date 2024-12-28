<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LocationService;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;

class LocationController extends Controller
{
    protected $locationService;

    public function __construct(LocationService $locationService)
    {
        $this->locationService = $locationService;
    }

    // Mengambil data provinsi
    public function getProvinces()
    {
        $provinces = $this->locationService->getProvinces();
        return response()->json($provinces);
    }

    // Mengambil data kota berdasarkan provinsi
    public function getCities(Request $request)
    {
        $provinceId = $request->query('province_id');
        $cities = $this->locationService->getCitiesByProvince($provinceId);
        return response()->json($cities);
    }

    // Mengambil data kecamatan berdasarkan kota
    public function getDistricts(Request $request)
    {
        $cityId = $request->query('city_id');
        $districts = $this->locationService->getDistrictsByCity($cityId);
        return response()->json($districts);
    }
    public function getLocationName(Request $request)
    {
        $type = $request->query('type'); // 'provinces', 'regencies', or 'districts'
        $id = $request->query('id');
        $location = $this->locationService->getLocationById($type, $id);
        return response()->json($location);
    }
}
