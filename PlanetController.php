<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlanetController extends Controller{
    public function index()
    {
        $planets = DB::table('planets')->get();
        dd($planets);
    }

    public function show($planet)
    {
        $planet = DB::table('planets')->where('name', $planet)->get();
        dd($planet);
    }

}
?>