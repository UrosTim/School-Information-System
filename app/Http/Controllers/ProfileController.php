<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(request $request)
    {
        return view('profile.show', ['profile' => $request->user()]);
    }
}
