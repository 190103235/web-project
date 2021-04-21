<?php

use Illuminate\Support\Facades\Route;
use App\Models\UsersModel;
use App\Models\Users2;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User2Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/lichnyi', function () {
    return view('lichnyi');
});

Route::get('/vibor', function () {
    return view('vibor');
});

Route::get('/regestr', function () {
    return view('regestr');
});

Route::get('/uslugi', function () {
    return view('uslugi');
});

Route::get('/4g', function () {
    return view('4g');
});

Route::get('/covid', function () {
    return view('covid');
});

Route::get('/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('/main');
});
Route::get('/{lang}','App\Http\Controllers\LocalizationController@index' );

Route::get('email/sending', [MailController::class, 'send']);

Route::post('lichnyi', [UserController::class, 'store'])->name('add-user');

Route::post('regestr', [User2Controller::class, 'store'])->name('add-user2');

Route::post('/index', [MainController::class, 'save'])->name('save');
Route::get('email/sending', [MailController::class, 'send'])->name('send');

Route::get('/relation', function(){
    $user=factory(\App\user_table2::class)->create();

    $user->tariff()->create([
        'number'=>'5555',
        'tariff_name'=>'shhs',
        'tariff_price'=>'sd',
    ]);
});