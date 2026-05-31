<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $name = 'Pheng An';
        $major = 'Computer Science';
        $subjects = ['Math', 'English', 'Programming'];
        $skills = ['PHP', 'JavaScript', 'Python'];
        $student = [
            'name' => $name,
            'major' => $major,
            'subjects' => $subjects,
            'skills' => $skills
        ];
    return view('profile', compact('name', 'major', 'subjects', 'skills'));
    }
}
