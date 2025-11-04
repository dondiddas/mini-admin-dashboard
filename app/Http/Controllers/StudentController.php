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

    public function show($id)
    {
        $student = DB::table('students')->where('id', $id)->first();

        if (!$student) {
    abort(404);
}

        return view('students.show', compact('student'));
    }
}
