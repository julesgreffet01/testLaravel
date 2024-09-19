<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', function () {
   $username = 'Jules';
   $mdp = 1234;
   //envoyer ces donnes a la vue
    //return view('bonjour',['username' => $username, 'mdp' => $mdp]);
    //on donne le nom de ce qu on veut puis la valeur et c est le nom qui fait office de nom pour la vue
    return view ('bonjour', compact('username','mdp'));
});


// prendre en parametre un nom
Route::get('/hello/{username}', function ($username) {
    return view ('hello', compact('username'));
});

//calcule des parametre
Route::get('/plus/{nbr1}/{nbr2}', function ($nbr1, $nbr2) {
    $calcul = $nbr1 + $nbr2;
    return view ('plus', compact('nbr1','nbr2','calcul'));
});

//-------------------- crud ----------------------

//get all
Route::get('/yordles', function () {
    $all = App\Models\Yordle::all();
    return view('index',compact('all'));
});

//find
Route::get('/yordles/{id}', function ($id) {
    $find = App\Models\Yordle::find($id);
    return view('show',compact('find'));
});

//create
Route::get('/yordles/create', function () {
    return view('create');
});
