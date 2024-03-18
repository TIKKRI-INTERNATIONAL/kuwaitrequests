<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Role;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::whereNotIn('id', [5])->get();
        $branches = Branch::all();
        $employees = User::whereDoesntHave('role', function ($query) {
            $query->where('id', 5);
        })->get();

        return view('employee', compact(['roles', 'branches', 'employees']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validate the incoming request
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|max:255',
                'roles' => 'required|exists:roles,id',
                'branch' => 'required|exists:branches,id',
            ]);
            // Start a database transaction
            DB::beginTransaction();

            // Create a new employee instance using the create method
            User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => $validatedData['password'],
                'roles_id' => $validatedData['roles'],
                'branches_id' => $validatedData['branch'],
            ]);

            // Commit the transaction
            DB::commit();

            // Redirect the user after successful creation
            return redirect()->route('employee')->with('success', 'Employee created successfully');
        } catch (Exception $e) {
            // Rollback the transaction in case of an exception
            DB::rollBack();
            // Handle exceptions, such as validation errors or database errors
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the user by ID
        $employee = User::findOrFail($id);
        $employees = User::whereDoesntHave('role', function ($query) {
            $query->where('id', 5);
        })->get();
        $roles = Role::whereNotIn('id', [5])->get();
        $branches = Branch::all();

        // Pass the user data to the view for editing
        return view('edit-employee', compact('employee', 'roles', 'branches','employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            // Validate the incoming request
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $id,
                'roles' => 'required|exists:roles,id',
                'branch' => 'required|exists:branches,id',
            ]);

            // Start a database transaction
            DB::beginTransaction();

            // Find the user by ID and update the attributes
            User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'roles_id' => $request->roles,
                'branches_id' => $request->branch,
            ]);

            // Commit the transaction
            DB::commit();

            // Redirect the user after successful update
            return redirect()->route('employee')->with('success', 'Employee updated successfully');
        } catch (\Exception $e) {
            // Rollback the transaction in case of an exception
            DB::rollBack();

            // Handle exceptions, such as validation errors or database errors
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
