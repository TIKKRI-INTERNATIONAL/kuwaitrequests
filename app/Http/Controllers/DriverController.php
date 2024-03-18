<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\User;
use App\Models\VehicleType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branches = Branch::all();
        $types = VehicleType::all();
        $drivers = Driver::all();

        return view('driver', compact(['branches', 'drivers', 'types']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'mobile' => 'required|string|max:255',
                'civil_id' => 'nullable|string|max:255',
                'vehicle_liecence' => 'nullable|string|max:255',
                'vehicle_types_id' => 'nullable|exists:vehicle_types,id',
                'password' => 'required|string|max:255',
                'branch' => 'required|exists:branches,id',
            ]);
            // Start a database transaction
            DB::beginTransaction();

            // Create a new driver instance using the create method
            $user = User::create([
                'name' => $validatedData['name'],
                'email' => '',
                'password' => $validatedData['password'],
                'roles_id' => 5,
                'branches_id' => $validatedData['branch'],
            ]);

            Driver::create([
                'users_id' => $user['id'],
                'name' => $validatedData['name'],
                'mobile' => $validatedData['mobile'],
                'civil_id' => $validatedData['civil_id'],
                'vehicle_liecence' =>  $validatedData['vehicle_liecence'],
                'vehicle_types_id' => $validatedData['vehicle_types_id'],
            ]);

            // Commit the transaction
            DB::commit();

            // Redirect the user after successful creation
            return redirect()->route('driver')->with('success', 'Driver created successfully');
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
    public function edit($id)
    {
          // Find the user by ID
          $driver = Driver::findOrFail($id);
          $types = VehicleType::all();
          $drivers = Driver::all();
          $branches = Branch::all();
          $user = User::findOrFail($driver->users_id);

          // Pass the user data to the view for editing
          return view('edit-driver', compact('driver', 'types', 'branches','drivers','user'));
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
                'mobile' => 'required|string|max:255',
                'civil_id' => 'nullable|string|max:255',
                'vehicle_liecence' => 'nullable|string|max:255',
                'vehicle_types_id' => 'nullable|exists:vehicle_types,id',
                'branch' => 'required|exists:branches,id',
            ]);

            // Start a database transaction
            DB::beginTransaction();

              // Update the driver details
              $driver = Driver::where('id', $id)->firstOrFail();
              $driver->update([
                  'name' => $validatedData['name'],
                  'mobile' => $validatedData['mobile'],
                  'civil_id' => $validatedData['civil_id'],
                  'vehicle_liecence' =>  $validatedData['vehicle_liecence'],
                  'vehicle_types_id' => $validatedData['vehicle_types_id'],
              ]);

            // Find the driver by ID
            $user = User::findOrFail($driver->users_id);

            // Update the user details
            $user->update([
                'name' => $validatedData['name'],
                'branches_id' => $validatedData['branch'],
            ]);

            // Commit the transaction
            DB::commit();

            // Redirect the user after successful update
            return redirect()->route('driver')->with('success', 'Driver updated successfully');
        } catch (Throwable $e) {
            // Rollback the transaction in case of an exception
            DB::rollBack();
            // Handle exceptions, such as validation errors or database errors
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }

}
