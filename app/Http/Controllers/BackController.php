<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Back;

class BackController extends Controller
{
    public function index(back $back)
    {
        return view('backs/index')->with(['backs' => $back->get()]);  
       
    } //
}
