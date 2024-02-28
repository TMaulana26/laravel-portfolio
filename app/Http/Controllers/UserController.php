<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function contactMe (Request $request) {
        $userMessage = $request->validate([
            'name' => ['required', 'min:3', 'max:100'],
            'email' => ['required', 'email'],
            'message' => ['required', 'min:6', 'max:200']
        ]);

        $User = User::create($userMessage);
        return redirect('/contact');

    }
}
