<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;
use Illuminate\Support\Facades\Auth;

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
    $input['user_id']=Auth::id();
    $log->fill($input)->save();
    return redirect('/log/' . $log->id);
}
    
}

