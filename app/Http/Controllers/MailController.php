<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Models\UsersModel;

class MailController extends Controller
{
    public function send(){
        $obj = new \stdClass();
        $roles = DB::table('user_table1')->pluck('email')->last();
        Mail::to($roles)->send(new DemoEmail($obj));
        return redirect('lichnyi');
    }
}
