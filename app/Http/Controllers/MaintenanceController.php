<?php

namespace App\Http\Controllers;

use App\maintenance;
use App\cars;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Cars::all();
        foreach($cars as $key => $car){
            $cars[$key]->identificador = DB::table('cars')->where('id', '=', $car->id)->get()->first()->identificador;
        }
        return view('maintenance', compact('cars'));
    }
    public function save_maintenance(Request $request)
    {
        if($request->ajax())
        {
            Maintenance::create([
                'user_id' => Auth::id(),
                'car' => $request->car,
                'client_name' => $request->client_name,
                'observation' => $request->observation,
                'maintenance_date' => $request->maintenance_date
            ]);

        }
    }
    public function update_maintenance(Request $request)
    {
        if($request->ajax())
        {
            $head = Maintenance::find($request->id);
            $head->fill([
                'car' => $request->car,
                'client_name' => $request->client_name,
                'observation' => $request->observation,
                'maintenance_date' => $request->maintenance_date
            ]);
            $head->save();

        }
    }
    public function delete_maintenance(Request $request)
    {
        if($request->ajax())
        {
            $head = Maintenance::find($request->id);
            if($head->user_id == Auth::id()){
                $head->delete();
            }
        }
    }

    public function get_all_maintenance()
    {
        $all = Maintenance::where('user_id','=', Auth::id())->get();
        foreach($all as $key => $value){
            $all[$key]->identificador = DB::table('cars')->where('id', '=', $value->id)->get()->first()->identificador;
            $all[$key]['maintenance_date'] = \Carbon\Carbon::parse($value->maintenance_date)->timezone('America/Sao_Paulo')->format('d/m/Y');
        }
        return $all;
    }

    public function get_maintenance($id){
        $head = Maintenance::find($id);
        $car = Cars::find($head->car);
        $head['model'] = $car->model;
        $head['year'] = $car->year;

        return $head;
    }

    public function get_info_car($id){
        $head = Cars::find($id);
        if($head->user_id == Auth::id()){
            return $head;
        }
    } 
}
