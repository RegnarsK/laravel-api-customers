<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Customer $customer)
{
    return $customer->orders;
    
    $customer = Customer::findOrFail($customer_id);
    $orders = $customer->orders()
        ->select('orders.order_id', 'orders.customer_id', 'orders.order_date', 'orders.comments', 'orders.shipped_date', 'orders.shipper_id', 'order_statuses.name as status_name') 
        ->join('order_statuses', 'orders.status', '=', 'order_statuses.order_status_id') 
        ->get();

    return response()->json($orders, 200);
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
    public function show(Order $order)
    {
//         $order = DB::table('orders')
//         ->join('order_statuses', 'orders.status', '=', 'order_statuses.order_status_id')
//         ->where('orders.order_id', $order_id)
//         ->where('orders.customer_id', $customer_id)
//         ->select('orders.*', 'order_statuses.name as status_name')
//         ->first();

//     if (!$order) {
//         return response()->json(['message' => 'Order not found'], 404);
//     }


// return response()->json($order, 200);
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
