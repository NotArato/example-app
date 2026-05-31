<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create()
    {
        return view('form');
    }
    public function store(Request $request)
    {
        
        
        // return dd($request->all());
        
        $request->validate([
            'name' => 'required|min:5|max:20',
            'email' => 'required|email',
            'message' => 'required',
            ]);
            
            $name = $request->input('name');
            $email = $request->input('email');
            $message = $request->input('message');

            return view('form-result', compact('name', 'email', 'message'));
        // return "Get data successfully.";

    }
}