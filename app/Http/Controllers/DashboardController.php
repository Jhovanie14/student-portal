<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');


        $users = DB::table('users')->where('name', 'LIKE', '%' . $search . '%')->orderBy('name', 'asc')->get();

        return view('dashboard.dashboard-portal', ['users' => $users]);
    }
}
