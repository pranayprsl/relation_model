<?php

namespace App\Http\Controllers;
use App\Models\College;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function add_college()
    {
        $student = new Student;
        $student->name = 'pranay';
        $student->class = 'computer';

        $college = new College;
        $college->college_name = 'Dharampeth polly';
        $college->area = 'sakkardar';
        $college->save();
        $college->student()->save($student);
    }

    public function show($id)
    {
        $student = College::find($id)->student;
        return view('student',compact('student'));
        
    }
}
