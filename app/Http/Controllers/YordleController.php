<?php

namespace App\Http\Controllers;
use App\Models\Yordle;

class YordleController
{
    //index
    function index() {
        $all = Yordle::all();
        return view('index',compact('all'));
    }
    //create
    function create() {
        return view('create');
    }
    //edit
    function edit($id) {
        $find = Yordle::find($id);
        return view('edit', compact('find'));
    }
    //show
    function show($id) {
        $find = Yordle::find($id);
        return view('show',compact('find'));
    }
    //store
    function store() {

        $validate = request()->validate([
            'yordle_name' => 'required',
            'yordle_price' => 'integer',
        ]);

        $y = new Yordle;
        $y -> name = request('yordle_name');
        $y -> price = request('yordle_price');
        $y -> description = request('yordle_desc');
        $y -> image = request('yordle_image');
        $y -> dateBirthday = request('yordle_birthday');
        $y -> save();

        return redirect('/yordles/'.$y->id);
    }

    //update
    function update($id) {
        $validate = request()->validate([
            'yordle_name' => 'required',
            'yordle_price' => 'required',
            'yordle_desc' => 'required',
            'yordle_birthday' => 'required',
        ]);

        $y = Yordle::find($id);
        $y -> name = request('yordle_name');
        $y -> price = request('yordle_price');
        $y -> description = request('yordle_desc');
        $y -> image = request('yordle_image');
        $y -> dateBirthday = request('yordle_birthday');
        $y -> save();

        return redirect('/yordles/'.$y->id);
    }

    //destroy
    function destroy($id) {
        $y = Yordle::destroy($id);
        return redirect('/yordles');
    }


}
