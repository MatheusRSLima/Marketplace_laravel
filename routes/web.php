<?php

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
    $helloWorld = 'Hello World';
    return view('welcome', compact('helloWorld'));
});

Route::get('/model', function () {
    //$products = \App\ProductConfig::all();

    //$user = new \App\User();
    /*     $user = \App\User::find(1);
    $user->name = 'Usuário Teste Editado';
    $user->save(); */
    //return \App\User::all();
    //return \App\User::where('name', 'Darryl Emmerich')->get();

/*     $user = \App\User::create([
        'name' => 'Nanderson Castro',
        'email' => 'email100@email.com',
        'password' => bcrypt('12345678')
    ]);
        dd($user); */

    $user = \App\User::find(40);

    return \App\User::all();
});
