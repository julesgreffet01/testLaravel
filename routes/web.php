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


