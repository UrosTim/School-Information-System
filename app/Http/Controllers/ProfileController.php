<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        return view('profile.show', [
            'profile' => $request->user(),
            ]);
    }
}
