<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\maintenance;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $all_main = DB::Table('maintenances')->where('user_id','=', Auth::id())->whereBetween('maintenance_date', [Carbon::now(), Carbon::now()->addDays(7)])->get()
        ->sortBy('maintenance_date');
        
        foreach($all_main as $key => $value){
            $all_main[$key]->identificador = DB::table('cars')->where('id', '=', $value->id)->get()->first()->identificador;
        }
        return view('home', compact('all_main'));
    }
}
