<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TariffController extends Controller
{
    //
    public function index(){
        $tariffs = tariff::all();

        return view('tariff.index') -> with(['tariffs' => $tariffs]);  //returns all the tariffs in the database
   }

    public function store(Request $request){
        $tariff = new tariff();

        $tariff->name = $request->input('tariff_name');
        $tariff->surname = $request->input('tariff_price');
        $tariff->age = $request->input('tariff_hegebytes');
        $tariff->number = $request->input('tariff_minutes');

        $tariff->save();
    }
}
