<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meal;


class MealController extends Controller
{
    public function index(meal $meal)
    {
        return view('meals/index')->with(['meals' => $meal->get()]);  
       
    } 
}
