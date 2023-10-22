<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        //   $todayDate = /* '2023-10-15';  */ Carbon::now();
        // $orders = Order::whereDate('created_at', $todayDate)->get();
        $todayDate = Carbon::now()->format('y-m-d');
        $orders = Order::when($request->date != NULL, function ($q) use ($request, $todayDate) {
            if ($request->date) {
                return $q->whereDate('created_at', $request->date);
            }

            //   $q->whereDate('created_at', $todayDate);
        })->when($request->status != NULL, function ($q) use ($request) {
            $q->where('status_message', $request->status);
        })
            ->paginate(10);
        /*     if ($orders) {
            dd($orders);
        } */
        return view('admin.orders.index', compact('orders'));
    }
    public function show(int $orderId)
    {
        $order = Order::where('id', $orderId)->first();
        if ($order) {
            return view('admin.orders.show', compact('order'));
        } else {
            return redirect('admin/orders')->with('message', 'order id not found');
        }
    }
}
