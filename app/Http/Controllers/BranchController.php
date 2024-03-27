<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Area;
use App\Models\Block;
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
        $areas = Area::all();
        $blocks = Block::all();

        return view('branch', compact(['branches', 'areas', 'blocks']));
    }

    public function getArea(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'area_id' => 'required|exists:areas,id'
        ]);

        // Fetch the area coordinates based on the provided area ID
        $areaId = $request->input('area_id');
        $area = Area::find($areaId);

        if (!$area) {
            // If area not found, return error response
            return response()->json([
                'success' => false,
                'message' => 'Area not found'
            ], 404);
        }

        // Prepare the coordinates array
        $coordinates = [
            'lat' => $area->lat,
            'lng' => $area->lng
        ];

        // Return the coordinates as JSON response
        return response()->json([
            'success' => true,
            'area_name' => $area->name,
            'coordinates' => $coordinates,
        ]);
    }

    public function getABlock(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'block_id' => 'required|exists:blocks,id'
        ]);

        // Fetch the area coordinates based on the provided block ID
        $blockId = $request->input('block_id');
        $block = Block::find($blockId);

        if (!$block) {
            // If area not found, return error response
            return response()->json([
                'success' => false,
                'message' => 'Block not found'
            ], 404);
        }

        // Prepare the coordinates array
        $coordinates = [
            'lat' => $block->lat,
            'lng' => $block->lng
        ];

        // Return the coordinates as JSON response
        return response()->json([
            'success' => true,
            'block_name' => $block->name,
            'coordinates' => $coordinates,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'mobile' => 'nullable|string',
                'area' => 'nullable|string',
                'block' => 'nullable|string',
                'street' => 'nullable|string',
                'building_no' => 'nullable|string',
                'jedda' => 'nullable|string',
                'apartment' => 'nullable|string',
                'floor' => 'nullable|string',
            ]);

            // Start a database transaction
            DB::beginTransaction();

            // Create a new branch instance using the create method
           $branch = Branch::create([
                'name' => $validatedData['name'],
                'mobile' =>  $validatedData['mobile'],
            ]);

             // Create a new address
             Address::create([
                'sub_id' => $branch->id,
                'type' => 'branch',
                'area' => $validatedData['area'],
                'block' => $validatedData['block'],
                'street' => $validatedData['street'],
                'building_no' => $validatedData['building_no'],
                'jedda' => $validatedData['jedda'],
                'apartment' => $validatedData['apartment'],
                'floor' => $validatedData['floor'],
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
                'mobile' => 'nullable|string',
            ]);

            // Start a database transaction
            DB::beginTransaction();

            // Update the driver details
            $branch = Branch::where('id', $id)->firstOrFail();
            $branch->update([
                'name' => $validatedData['name'],
                'mobile' => $validatedData['mobile']
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
}
