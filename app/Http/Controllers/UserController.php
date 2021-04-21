<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_model1;
// use App\Models\Users2;
use Illuminate\Http\UploadFile;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index(){
         $users = user_model1::all();

         return view('user.index') -> with(['users' => $users]);  //returns all the users in the database
    }

    public function store(Request $request){
        $user = new user_model1();
        // $account = new Users2();

        $user->number = $request->input('number');
        $user->password = $request->input('password');
        $user->email = $request->input('email');

        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/user/' , $filename);
            $user->photo = $filename;
            $user->save();
        }else{
            $message = "{{__('Вы забыли загрузить фото')}}!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        
        // $db = DB::table('user1')->pluck('id')->last();
        // $account->user_id = $db;
        // $account->save();

        $message = "{{__('Проверьте почту')}}!";
        echo "<script type='text/javascript'>alert('$message');</script>";

        return redirect('email/sending');
    }
}
