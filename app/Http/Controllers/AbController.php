<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ab;

class AbController extends Controller
{
    public function index(Ab $ab)
    {
        return view('abs/index')->with(['abs' => $ab->get()]);  
       
    }
}
