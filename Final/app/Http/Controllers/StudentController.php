<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    
function Save()
{
    return view('studentsave');
}

function save(Request $request)
{
   
    $request->validate([
        'name' => 'required',
        'surname' => 'required',
        'department' => 'required'
    ]);

    
    $student = new Student();
    $student->name = $request->name;
    $student->surname = $request->surname;
    $student->department = $request->department;
    
    $save = $student->save();

    if ($save) {
        return back()->with('success', 'successfully');
    } else {
        return back()->with('fail', 'Something wrong.');
    }
} 

}
