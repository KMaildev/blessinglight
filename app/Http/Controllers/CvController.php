<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCv;
use App\Models\Cv;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function index()
    {
        return view('cv.index');
    }

    public function store(StoreCv $request)
    {
        if ($request->hasFile('attachment_file')) {
            $attachment_file = $request->file('attachment_file');
            $path = $attachment_file->store('public/cv');
            $original_name = $attachment_file->getClientOriginalName();
        }

        $cv = new Cv();
        $cv->name = $request->name;
        $cv->phone = $request->phone;
        $cv->additional_note = $request->additional_note;

        $file_name = explode("/", $path);
        $file_name = $file_name[2];
        // $cv->path = 'http://localhost/projects/immortalfriends/storage/cv/' . $file_name ?? '';
        $cv->attachment_file = 'https://www.shwelannhpwint.com/storage/cv/' . $file_name ?? '';
        $cv->save();
        return redirect()->back()->with('success', 'Thank you for your contact. our team is ready to response all your queries..');
    }
}
