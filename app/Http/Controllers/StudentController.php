<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = DB::table('students');

        if($search){
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%$search%")
                  ->orWhere('email', 'like', "%$search%");
            });
        }

        $students = $query->paginate(10);
        $totalStudents = DB::table('students')->count();
        $searchCount = $query->count();

        return view('students.index', compact('students', 'totalStudents', 'search', 'searchCount'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
        ]);

        DB::table('students')->insert([
            'name'       => $request->name,
            'email'      => $request->email,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }

    public function show($id)
    {
        $student = DB::table('students')->where('id', $id)->first();

        if (!$student) {
            abort(404);
        }

        return view('students.show', compact('student'));
    }
}
