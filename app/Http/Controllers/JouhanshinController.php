<?php

namespace App\Http\Controllers;

use App\Models\Jouhanshin;
use Illuminate\Http\Request;

class JouhanshinController extends Controller
{
    public function index(Jouhanshin $jouhanshin)
    {
        return view('jouhanshins/index')->with(['jouhanshins' => $jouhanshin->get()]);  
       
    }
}
?>