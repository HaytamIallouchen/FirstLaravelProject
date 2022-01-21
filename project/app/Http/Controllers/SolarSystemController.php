<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SolarSystem;
class SolarSystemController extends Controller
{
    protected $solarSystems = [];
    public function __construct()
    {
        $this->solarSystems = SolarSystem::withCount('planets')->get();
    }
    public function index()
    {
        $solarSystems = $this->solarSystems;
        return view('solarSystems', ['solarsystems' => $solarSystems]);
    }
    public function show($id)
    {
        $solarSystems = $this->solarSystems;
        return view('solarId', ['solarsystem' => $solarSystems->where('id', $id)->first()]);
    }
}