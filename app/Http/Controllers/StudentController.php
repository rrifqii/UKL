<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $student= Student::query();

        if ($request->filled('search')) { 
            $student->where('name', 'LIKE', '%' . $request->search . '%');
        }

        return view('students.index', [
            'students' => $student->simplePaginate(3),
        ]);
    }

    public function create()
    {
        return view('students.create');
    }
    
    public function store(Request $request)
    {
        $student = New Student();


        $student->name = $request->name;
        $student->address = $request->address;
        $student->phone_number = $request->phone_number;

        $student->save();

        return redirect()->route('students.index');
        
    }

    public function edit($id)
    {
        $student = Student::find($id);

        return view('students.edit', [
            'student' => $student,
        ]);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        $student->name = $request->name;
        $student->address = $request->address;
        $student->phone_number = $request->phone_number;

        $student->save();

        return redirect()->route('students.index');
    }

    public function destroy($id)
    {
        $student = Student::find($id);

        $student->delete();

        return redirect()->route('students.index');
    }
}

