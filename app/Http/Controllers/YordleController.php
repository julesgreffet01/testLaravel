<?php

namespace App\Http\Controllers;
use App\Models\Yordle;

class YordleController extends Controller
{
    //index
    public function index() {
        $all = Yordle::all();
        return view('index',compact('all'));
    }
    //create
    public function create() {
        return view('create');
    }
    //edit
    public function edit($id) {
        $find = Yordle::find($id);
        return view('edit', compact('find'));
    }
    //show
    public function show($id) {
        $find = Yordle::find($id);
        return view('show',compact('find'));
    }
    //store
    public function store() {

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
    public function update($id) {
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
    public function destroy($id) {
        $y = Yordle::destroy($id);
        return redirect('/yordles');
    }


}
