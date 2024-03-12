<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

class ProfileController extends Controller
{
    public function profile()
    {
        try {
            $id = Auth::user()->id;
            // Retrieve the user by ID
            $user = User::findOrFail($id);

            // Return the user's profile view
            return view('profile', compact('user'));
        } catch (Throwable $e) {
            // Handle the exception
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
