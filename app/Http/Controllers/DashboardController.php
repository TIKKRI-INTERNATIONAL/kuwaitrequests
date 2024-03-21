<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();

        $pendings = Order::where('status', 'Pending')->get();
        $pendingCount = $pendings->count();

        $deliverys = Order::where('status', 'Delivery')->get();
        $deliveryCount = $deliverys->count();

        $enroutes = Order::where('status', 'EnRoute')->get();
        $enroutesCount = $enroutes->count();

        $completes = Order::where('status', 'Complete')->get();
        $completeCount = $completes->count();

        $cancels = Order::where('status', 'Cancel')->get();
        $cancelCount = $cancels->count();

        return view('home', compact(['orders', 'pendings', 'pendingCount', 'deliverys', 'deliveryCount', 'enroutes', 'enroutesCount', 'completes', 'completeCount', 'cancels', 'cancelCount']));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
