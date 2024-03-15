<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

    public function edit()
    {
        $id = Auth::user()->id;
        // Find the user by ID
        $user = User::findOrFail($id);
        $profile = Profile::where('users_id', $id)->first();

        // Pass the user data to the view for editing
        return view('edit-profile', compact(['user', 'profile']));
    }

    public function update(Request $request)
    {dd($request);
        try {
            // Validate the incoming request data
            $request->validate([
                'merchant_name' => 'required|string|max:255',
                'legal_name' => 'required|string|max:255',
                'contract_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'signatory_document' => 'nullable|file|max:2048',
                'articles_of_association' => 'nullable|file|max:2048',
                'licence_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'note_details' => 'nullable|string|max:255',
            ]);

            // Begin a database transaction
            DB::beginTransaction();

            // Update the profile with the validated data
            $user = Auth::user();
            $profile = $user->profile;

            $profile->merchant_name = $request->input('merchant_name');
            $profile->legal_name = $request->input('legal_name');

            // Handle file uploads if needed
            if ($request->hasFile('contract_photo')) {
                $contractPhoto = $request->file('contract_photo');
                // Process and store the file
            }
            if ($request->hasFile('signatory_document')) {
                $signatoryDocument = $request->file('signatory_document');
                // Process and store the file
            }
            if ($request->hasFile('articles_of_association')) {
                $articlesOfAssociation = $request->file('articles_of_association');
                // Process and store the file
            }
            if ($request->hasFile('licence_photo')) {
                $licencePhoto = $request->file('licence_photo');
                // Process and store the file
            }

            // Optionally, you can update the user's note details
            $profile->note_details = $request->input('note_details');
            $profile->save();

            // Commit the database transaction
            DB::commit();

            // Redirect the user to a success page or back to the form
            return redirect()->back()->with('success', 'Profile updated successfully');
        } catch (Throwable $e) {
            // Rollback the database transaction on exception
            DB::rollBack();

            // Log the exception or handle it as needed
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
