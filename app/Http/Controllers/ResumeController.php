<?php

namespace App\Http\Controllers;

use App\Models\Resume; // Ensure you have the correct model imported
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        $resumes = Resume::all(); // Fetch all resumes
        return view('resumes.index', compact('resumes')); // Return the view with resumes
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'summary' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'hobbies' => 'required',
            'address' => 'required',
            'education_attainment' => 'required',
        ]);

        Resume::create($request->only([
            'name', 
            'summary', 
            'email', 
            'phone', 
            'hobbies', 
            'address', 
            'education_attainment'
        ]));

        return redirect('/resume')->with('success', 'Resume created successfully!');
    }
}
