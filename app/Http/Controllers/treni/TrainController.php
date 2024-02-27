<?php

namespace App\Http\Controllers\treni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//models
use  App\Models\Train;
class TrainController extends Controller
{
    public function index(){
        $trains = Train::all();
        return view('welcome',compact('trains'));
    }
    // public function show($id){
    //     $movie = Train::where('id',$id)->first();
    //     return view('movies.show',compact('movie'));
    // }
}
