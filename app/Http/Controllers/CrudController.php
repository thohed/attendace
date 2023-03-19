<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class CrudController extends Controller
{

    function index(){
            return view('Crud.crud');
    }

    function add(Request $request){

        $request->validate([
            'name'=>'required',
            'type'=>'required',
            'email'=>'required|email|unique:crud'
        ]);
        // return $request->input();
        // $query = DB::table('crud')->get();

        $query = DB::table('crud')->insert([
          'name'=>$request->input('name'),
          'type'=>$request->input('type'),
          'email'=>$request->input('email'),
        ]);

        if($query){
            return back()->with('Success','Data have been SuccessFully');
        }
        else{
            return back()->with('fail','Somthing went tobe wrong');
        }
    }
}
