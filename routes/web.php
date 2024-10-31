<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YordleController;

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
Route::get('/yordles', [YordleController::class, 'index']);


//create
Route::get('/yordles/create', [YordleController::class, 'create']);


//edit
Route::get('/yordles/{id}/edit', [YordleController::class, 'edit']);


//show
Route::get('/yordles/{id}', [YordleController::class, 'show']);


//store
Route::post('/yordles', [YordleController::class, 'store']);


//update
Route::patch('/yordles/{id}', [YordleController::class, 'update']);


//destroy
Route::delete('/yordles/{id}', [YordleController::class, 'destroy']);
