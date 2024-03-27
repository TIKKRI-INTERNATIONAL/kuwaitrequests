<?php

namespace App\Http\Controllers;

use App\Models\DriverOrder;
use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class DriverOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($orderId)
    {
        try {
            $userId = auth()->user()->id;
            $driverId =  Driver::where('users_id', $userId)->first();

            // Start a database transaction
            DB::beginTransaction();
            // Save the assignment details to driver_orders table
            DriverOrder::create([
                'orders_id' => $orderId,
                'drivers_id' => $driverId->id,
                'status' => 'Assign'
            ]);

            Order::where('id', $orderId)->update(['status' => 'Delivery']);

            // Commit the transaction
            DB::commit();

            // Optionally, you can redirect back to the previous page or wherever you need
            return redirect()->back()->with('success', 'Order assigned to driver successfully.');
        } catch (Throwable $e) {
            // If an exception occurs, rollback the transaction
            DB::rollback();

            // Redirect back with an error message
            return redirect()->back()->with('error',  $e->getMessage());
        }
    }

    public function enroute()
    {
        try {
            $userId = auth()->user()->id;
            $driverId =  Driver::where('users_id', $userId)->first();
            $orders = DriverOrder::where('drivers_id', $driverId->id)
                ->whereIn('id', function ($query) use ($driverId) {
                    $query->select(DB::raw('MAX(id)'))
                        ->from('driver_orders')
                        ->where('drivers_id', $driverId->id)
                        ->havingRaw('COUNT(DISTINCT status) = 1')
                        ->having('status', '=', 'Assign')
                        ->groupBy('orders_id');
                })
                ->get();

            // Start a database transaction
            DB::beginTransaction();

            if ($orders) {
                // Save the assignment details to driver_orders table
                foreach ($orders as $order) {
                    DriverOrder::create([
                        'orders_id' => $order->orders_id,
                        'drivers_id' => $driverId->id,
                        'status' => 'EnRoute'
                    ]);

                    Order::where('id', $order->orders_id)->update(['status' => 'EnRoute']);
                }
            }
            // Commit the transaction
            DB::commit();

            // Optionally, you can redirect back to the previous page or wherever you need
            return redirect()->back()->with('success', 'Order EnRoute to driver successfully.');
        } catch (Throwable $e) {
            // If an exception occurs, rollback the transaction
            DB::rollback();

            // Redirect back with an error message
            return redirect()->back()->with('error',  $e->getMessage());
        }
    }

    public function complete($orderId)
    {
        try {
            $userId = auth()->user()->id;
            $driverId =  Driver::where('users_id', $userId)->first();

            // Start a database transaction
            DB::beginTransaction();
            // Save the assignment details to driver_orders table
            DriverOrder::create([
                'orders_id' => $orderId,
                'drivers_id' => $driverId->id,
                'status' => 'Complete'
            ]);

            Order::where('id', $orderId)->update(['status' => 'Complete']);

            // Commit the transaction
            DB::commit();

            // Optionally, you can redirect back to the previous page or wherever you need
            return redirect()->back()->with('success', 'Order completed to driver successfully.');
        } catch (Throwable $e) {
            // If an exception occurs, rollback the transaction
            DB::rollback();

            // Redirect back with an error message
            return redirect()->back()->with('error',  $e->getMessage());
        }
    }

    public function cancel($orderId)
    {
        try {
            $userId = auth()->user()->id;
            $driverId =  Driver::where('users_id', $userId)->first();

            // Start a database transaction
            DB::beginTransaction();
            // Save the assignment details to driver_orders table
            DriverOrder::create([
                'orders_id' => $orderId,
                'drivers_id' => $driverId->id,
                'status' => 'Cancel'
            ]);

            Order::where('id', $orderId)->update(['status' => 'Cancel']);

            // Commit the transaction
            DB::commit();

            // Optionally, you can redirect back to the previous page or wherever you need
            return redirect()->back()->with('success', 'Order Cancel to driver successfully.');
        } catch (Throwable $e) {
            // If an exception occurs, rollback the transaction
            DB::rollback();

            // Redirect back with an error message
            return redirect()->back()->with('error',  $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(DriverOrder $driverOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DriverOrder $driverOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DriverOrder $driverOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DriverOrder $driverOrder)
    {
        //
    }
}
