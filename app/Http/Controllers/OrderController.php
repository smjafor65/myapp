<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $orders=Order::orderBy("id","desc")->paginate(7);

        $orders=Order::when($request->search, function($query) use($request) {
            return $query->whereAny([
                'id',
                'customer_name',
                'payment_method',
                'status',
                'total',
                'order_date'
            ],"LIKE", "%".$request->search."%");
        })->orderBy("id","desc")->paginate(7);
        return view('pages.erp.order.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pages.erp.order.create");
    }


// Verb	URI	Action	Route Name
// GET	/photos	index	photos.index
// GET	/photos/create	create	photos.create
// POST	/photos	store	photos.store
// GET	/photos/{photo}	show	photos.show
// GET	/photos/{photo}/edit	edit	photos.edit
// PUT/PATCH	/photos/{photo}	update	photos.update
// DELETE	/photos/{photo}	destroy	photos.destroy


    //     ];
    public function store(Request $request)
    {
        $order=new Order();
        $order->customer_name=$request->customer_name;
        $order->total=$request->total;
        $order->payment_method=$request->payment_method;
        $order->status=$request->status;
        $order->order_date=$request->order_date;
        $order->save();
        return redirect()->route("category.orders.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order=Order::findOrFail($id);
             return view('pages.erp.order.view', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $order=Order::findOrFail($id);
        return view("pages.erp.order.edit", compact("order") );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $order=Order::findOrFail($id);
         $order->customer_name=$request->customer_name;
         $order->total=$request->total;
         $order->payment_method=$request->payment_method;
         $order->status=$request->status;
         $order->order_date=$request->order_date;
         $order->update();
         return redirect()->route("category.orders.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
