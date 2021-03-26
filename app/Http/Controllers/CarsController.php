<?php

namespace App\Http\Controllers;

use App\cars;
use Illuminate\Http\Request;
use Auth;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cars');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function save_car(Request $request)
    {
        if($request->ajax())
        {
            Cars::create([
                'user_id' => Auth::id(),
                'identificador' => $request->identificador,
                'brand' => $request->brand,
                'model' => $request->model,
                'year' => $request->year
            ]);

        }
    }
    public function update_car(Request $request)
    {
        if($request->ajax())
        {
            $head = Cars::find($request->id);
            $head->fill([
                'identificador' => $request->identificador,
                'brand' => $request->brand,
                'model' => $request->model,
                'year' => $request->year
            ]);
            $head->save();

        }
    }
    public function delete_car(Request $request)
    {
        if($request->ajax())
        {
            $head = Cars::find($request->id);
            if($head->user_id == Auth::id()){
                $head->delete();
            }

        }
    }

    public function get_all_cars()
    {
        return Cars::where('user_id','=', Auth::id())->get();
    }

    public function get_car($id){
        $head = Cars::find($id);
        if($head->user_id == Auth::id()){
            return $head;
        }
        
    }
}
