<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Customer;
use App\Models\PaymentType;
use App\Models\VehicleType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pays = PaymentType::all();
        $types = VehicleType::all();
        return view('form-page', compact(['pays', 'types']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validate the incoming request data
            $validatedData = $request->validate([
                'mobile' => 'required|string',
                'name' => 'required|string',
                'pays' => 'required|numeric',
                'amount' => 'required|numeric',
                'distance' => 'required|numeric',
                'delivery' => 'required|numeric',
                'type' => 'required|numeric',
                'order_no' => 'required|string',
                'terms' => 'accepted',
                'area' => 'required|string',
                'block' => 'required|string',
                'street' => 'required|string',
                'building' => 'required|string',
                'jedda' => 'required|string',
                'apartment' => 'required|string',
                'floor' => 'required|string',
                'notes' => 'nullable|string',
            ]);

            // Start transaction
            DB::beginTransaction();

            // Create a new customer record
            $customer = Customer::create([
                'mobile' => $validatedData['mobile'],
                'name' => $validatedData['name'],
            ]);

            // Create a new order
            Order::create([
                'customers_id' => $customer->id,
                'payment_types_id' => $validatedData['pays'],
                'amount' => $validatedData['amount'],
                'distance' => $validatedData['distance'],
                'delivery' => $validatedData['delivery'],
                'vehicle_types_id' => $validatedData['type'],
                'order_no' => $validatedData['order_no'],
                'status' => "Pending",
            ]);

            // Create a new address
             Address::create([
                'sub_id' => $customer->id,
                'type' => 'customer',
                'area' => $validatedData['area'],
                'block' => $validatedData['block'],
                'street' => $validatedData['street'],
                'building_no' => $validatedData['building'],
                'jedda' => $validatedData['jedda'],
                'apartment' => $validatedData['apartment'],
                'floor' => $validatedData['floor'],
                'notes' => $validatedData['notes'],
            ]);

            // Commit transaction
            DB::commit();

            // Redirect the user after form submission
            return redirect()->back()->with('success', 'Order created successfully!');
        } catch (Throwable $th) {
            // If an exception occurs, rollback the transaction
            DB::rollback();

            // Log the exception or handle it accordingly
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function storeAddress(Request $request)
    {
        dd($request);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
