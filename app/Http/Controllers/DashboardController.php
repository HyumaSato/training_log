<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;

class DashboardController extends Controller
{
    public function dashboard(Log $log)
    {
        return view('dashboard')->with(['logs' => $log->get()]);  
       
    } 
}
