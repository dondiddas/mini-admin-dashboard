<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RetrieveAdminName extends Controller
{
    public function getAdminNames()
    {
        $names = DB::table('users')->pluck('name');

        return view('admin-names', compact('names'));
    }
}