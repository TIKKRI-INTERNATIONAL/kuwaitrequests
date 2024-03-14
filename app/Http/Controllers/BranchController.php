<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branches = Branch::all();

        return view('branch', compact(['branches']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'nullable|string|email|max:255|unique:branches',
            ]);

            // Start a database transaction
            DB::beginTransaction();

            // Create a new branch instance using the create method
              Branch::create([
                'name' => $validatedData['name'],
                'email' =>  $validatedData['email'],
            ]);

            // Commit the transaction
            DB::commit();

            // Redirect the user after successful creation
            return redirect()->route('branch')->with('success', 'Branch created successfully');
        } catch (Throwable $e) {
            // Rollback the transaction in case of an exception
            DB::rollBack();
            // Handle exceptions, such as validation errors or database errors
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $branch = Branch::findOrFail($id);
        $branches = Branch::all();

        // Pass the user data to the view for editing
        return view('edit-branch', compact('branch', 'branches'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        try {
            // Validate the request data
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'nullable|string|max:255',
            ]);

            // Start a database transaction
            DB::beginTransaction();

              // Update the driver details
              $branch = Branch::where('id', $id)->firstOrFail();
              $branch->update([
                  'name' => $validatedData['name'],
                  'email' => $validatedData['email']
              ]);

            // Commit the transaction
            DB::commit();

            // Redirect the user after successful update
            return redirect()->route('branch')->with('success', 'Branch updated successfully');
        } catch (Throwable $e) {
            // Rollback the transaction in case of an exception
            DB::rollBack();
            // Handle exceptions, such as validation errors or database errors
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branch $branch)
    {
        //
    }
}
