<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class CustomizeController extends Controller
{
    //public function file (Request $request){
    //    return view('file');
    //}

    public function customizeslidescontent(Request $request){
        Validator::make($request->all(), [
            'photo' => 'required|image',
        ])->validate();
        if($request->hasFile('photo')){
            $imageName = "slide".'.'.$request->photo->extension();
            $request->photo->move(public_path('images'), $imageName);
        }     
        return back();
    }
}