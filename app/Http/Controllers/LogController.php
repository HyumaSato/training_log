<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;

class LogController extends Controller
{
    public function index(Log $log)
    {
        return view('logs/index')->with(['logs' => $log->get()]);  

    }
    
    public function show(Log $log)
{
    return view('logs/show')->with(['log' => $log]);
}

public function create()
{
    return view('logs/create');
}
  
  public function store(Request $request, Log $log)
{
    $input = $request['log'];
    $log->fill($input)->save();
    return redirect('/logs/' . $log->id);
}
    
}

