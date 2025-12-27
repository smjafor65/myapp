<?php

namespace App\Http\Controllers;

use App\Models\district;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{

    function index(){


        //this is for join table

        // $schools=district::with("school")->get();
        // return $schools;

        $districts=School::with("district:id,name")->get();
        return $districts;




        $schools= School::all();
          $schools= School::orderBy("id","desc")->paginate(10);
        return view("school.index", compact("schools"));
    }

    function create(){
        return view("school.create")->with("success", "Created Successfully");
    }
    function save(Request $request){
        $schools=new School();
        $schools->name=$request->name;
        $schools->email=$request->email;
        $schools->address=$request->address;

        $schools->save();
        return redirect("school");
    }

    function edit($id){
        $school=School::find($id);
        return view("school.edit", compact("school"));

    }

    function update(Request $request, $id){
        $school=School::find($id);
        $school->name=$request->name;
        $school->email=$request->email;
        $school->address=$request->address;

        $school->update();
        return redirect("school")->with("success", "Added Successfully");
    }

    function delete($id){
        $school=School::find($id);
        $school->delete();
        return redirect("school")->with("success", "Deleted Successfully");

    }

}
