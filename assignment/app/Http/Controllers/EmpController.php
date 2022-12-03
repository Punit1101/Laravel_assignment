<?php

namespace App\Http\Controllers;

use App\Models\emp;
use Illuminate\Http\Request;

class EmpController extends Controller
{
    
    public function show()
    {
        $data= emp::all();
        return view('index',['result'=> $data]);
    } 
 
}
