<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Planet;
class PlanetController extends Controller
{
    protected $planets = [];
    public function __construct()
    {
        $this->planets = Planet::get();
    }
    public function index()
    {
        return view('planets', ['planets' => $this->planets]);
    }
    public function show($planet)
    {
        return view('planets', ['planets' => $this->planets->where('name', '=', ucfirst($planet))]);
    }
}
