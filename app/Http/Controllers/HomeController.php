<?php

namespace App\Http\Controllers;

use App\Models\Activitie;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $activities = Activitie::all();
        $teams = Team::all();
        return view('welcome', compact('activities', 'teams'));
    }
}
