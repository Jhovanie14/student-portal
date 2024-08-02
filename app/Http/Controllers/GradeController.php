<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\User;

class GradeController extends Controller
{
    public function showGrade(User $user)
    {
        $grades = $user->grades()->orderBy('grade', 'desc')->get();
        // dd($grades);
        return view('dashboard.dashboard-grade', ['user' => $user, 'grades' => $grades]);
    }

    public function delete($id)
    {
        $record = Grade::find($id);

        $record->delete();

        return redirect()->back();
    }
}
