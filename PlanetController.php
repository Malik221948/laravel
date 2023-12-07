<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Planet;

class PlanetController extends Controller{
    public function index()
    {
        $planets = Planet::all();
        return view('planets')->with(['planeten' => $planets]);
    }

    public function show($planet)
    {
        $planet = Planet::where('name', $planet)->get();
        //$planet = DB::table('planets')->where('name', $planet)->get();
        return view('planets')->with(['planeten' => $planet]);
    }

}
?>