<?php

namespace App\Http\Controllers;

use App\Models\Activitie;
use App\Models\Category;
use Illuminate\Http\Request;

class ActivitieController extends Controller
{
    public function show($id)
    {
        $activities = Activitie::where('categorie_id', $id)->get();
        $category = Category::findOrFail($id);
        return view('activities.show', compact('activities', 'category'));
    }
}
