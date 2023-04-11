<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leg;

class LegController extends Controller
{
    public function index(leg $leg)
    {
        return view('legs/index')->with(['legs' => $leg->get()]);  
       
    } //
}
