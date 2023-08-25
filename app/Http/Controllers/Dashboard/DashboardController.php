<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{


    function index()
    {
        $user = Auth::user();
        // dd($user);

        return view('Dashboard.index', [
            "user" => $user
        ]);
    }
}
