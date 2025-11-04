<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // total students
        $totalStudents = DB::table('students')->count();

        // students added today
        $todayNew = DB::table('students')
            ->whereDate('created_at', today())
            ->count();

        $thisMonthNew = DB::table('students')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();

        return view('dashboard', compact('totalStudents', 'todayNew', 'thisMonthNew'));
    }
}
