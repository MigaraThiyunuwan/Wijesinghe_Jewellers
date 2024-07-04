<?php

namespace App\Http\Controllers;

use App\Models\Leader;
use Illuminate\Http\Request;

class LeaderController extends Controller
{
    public function register()
    {
        return view('Leader.leaderRegister');
    }

    public function save(Request $request)
    {
        $leader = new Leader();
        $leader->Register($request);

        return redirect()->route('manager.profile')->with('managerSuccess', 'Leader added successfully!');
    }
}