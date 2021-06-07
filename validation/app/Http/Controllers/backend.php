<?php

namespace App\Http\Controllers;
use App\Models\Demo;
use Illuminate\Http\Request;

class backend extends Controller
{

    public $data;
    public function demo(Request $data){

// data validation start

 // dont be confused you can validate your form two types
 //type one
        // $data->validate([
        //     "name"=>"required",
        //     "email"=>"required",
        //     "date_of_birth"=>"required",
        //     "password"=>"required|min:8|max:16"
        // ]);

 //type one end

 // type two start


        $this->data = [
            "name"=>"required",
            "email"=>"required",
            "date_of_birth"=>"required",
            "password"=>"required|min:8|max:16"
         ];
        
        $data->validate($this->data);

// type two end

// data validation end

    $response = Demo::create($data->all());

     if($response){

      return back()->with("message","data inserted");

     }
     else{

      return back()->with("message","data is not inserted");

     }
    }
     
}
