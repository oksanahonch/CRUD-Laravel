<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Client;
use App\Models\Department;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Role;
use App\Models\Status;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::with('client', 'role', 'status', 'payment', 'city', 'department')->get();
        //dd($orders);
        return view('order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        $roles = Role::all();
        $statuses = Status::all();
        $payments = Payment::all();
        $cities = City::all();
        $departments = Department::all();

        return view('order.create', compact('clients', 'roles', 'statuses', 'payments', 'cities', 'departments'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([

            'client_id' => 'required|integer',
            'role_id' => 'required|integer',
            'status_id' => 'required|integer',
            'payment_id' => 'required|integer',
            'city_id' => 'required|integer',
            'department_id' => 'required|integer',

        ]);

        $newOrder = Order::create([

            'client_id' => $request->input('client_id'),
            'role_id' => $request->input('role_id'),
            'status_id' => $request->input('status_id'),
            'payment_id' => $request->input('payment_id'),
            'city_id' => $request->input('city_id'),
            'department_id' => $request->input('department_id'),

        ]);
        //dd($newOrder);
        

        return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $clients = Client::all();
        $roles = Role::all();
        $statuses = Status::all();
        $payments = Payment::all();
        $cities = City::all();
        $departments = Department::all();

        return view('order.edit', compact('order', 'clients', 'roles', 'statuses', 'payments', 'cities', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //dd($order);

        $order->client_id = $request->input('client_id');
        $order->role_id = $request->input('role_id');
        $order->status_id = $request->input('status_id');
        $order->payment_id = $request->input('payment_id');
        $order->department_id = $request->input('department_id');
        $order->update();
        
        return redirect()->route('order.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('order.index');
    }
}
