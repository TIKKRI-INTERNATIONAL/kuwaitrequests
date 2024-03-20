<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        try {
            // Begin transaction
            DB::beginTransaction();

            // Attempt to authenticate
            $credentials = $request->only('email', 'password');

            if (!Auth::attempt($credentials)) {
                // Check if the email doesn't match and the role ID is 5
                $user = User::where('name', $request->input('email'))->first();

                if ($user && $user->roles_id == 5 && Hash::check($request->input('password'), $user->password)) {
                    // Log in the user
                    Auth::login($user);
                } else {
                    // Invalid email, name, or password
                    throw ValidationException::withMessages([
                        'email' => ['Invalid email, name, or password'],
                    ]);
                }
            }
            // Authentication passed, commit transaction
            DB::commit();

            // Redirect authenticated user
            return redirect()->intended('/home');
        } catch (\Exception $e) {
            // Something went wrong, rollback transaction
            DB::rollBack();

            // Handle the exception
            return redirect()->back()->withInput()->withErrors(['email' => $e->getMessage()]);
        }
    }

    public function register(Request $request)
    {
        try {
            // Start a database transaction
            DB::beginTransaction();

            // Validate the incoming request
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|confirmed|min:8',
                'terms' => 'required|accepted',
            ]);

            // Create the user
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'roles_id' => 1,
                'branches_id' => 1
            ]);

            // Commit the transaction
            DB::commit();

            // authenticate the user after registration
            auth()->login($user);

            // Redirect the user after registration
            return redirect('/home');
        } catch (\Exception $e) {
            // Something went wrong, rollback the transaction
            DB::rollBack();

            // Handle the exception
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Redirect the user after logout
        return redirect('/');
    }
}
