<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_model2;
use App\Models\tariff;
use Illuminate\Support\Facades\DB;

class User2Controller extends Controller
{
    public function index(){
        $users = user_model2::all();

        return view('user.index') -> with(['users' => $users]);  //returns all the users in the database
   }

    public function store(Request $request){
        $user = new user_model2();
        $tariff = new tariff();

        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->iin = $request->input('iin');
        $user->number = $request->input('number');

        // $db = DB::table('tariff_table')->pluck('id')->last();
        // $tariff->user_id = $db;

        $user->save();

        $tariff = new tariff();
        $tariff->tariff_name = 'Меняй всё';
        $tariff->tariff_price = '1000 тг';
        $user->index()->save($tariff);
    }
}