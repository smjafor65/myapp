@extends('layout.erp.app');
@section('content')


<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h5 class="mb-0"> Edit Order</h5>
                </div>
                <div class="card-body">

                    <form action="{{route("category.orders.update",$order->id)}}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Customer Name -->
                        <div class="mb-3">
                            <label class="form-label">Customer Name</label>
                            <input type="text" class="form-control" value="{{$order->customer_name}}" name="customer_name" placeholder="Enter customer name" required>
                        </div>

                        <!-- Total -->
                        <div class="mb-3">
                            <label class="form-label">Total ($)</label>
                            <input type="number" step="0.01"  name="total"value="{{$order->total}}" class="form-control" placeholder="Enter total amount" required>
                        </div>

                        <!-- Payment Method -->
                        <div class="mb-3">
                            <label class="form-label">Payment Method</label>
                            <select  name="payment_method" class="form-select" required>
                                <option value="{{$order->payment_method}}" selected>{{$order->payment_method}}</option>
                                <option value="cash">Cash</option>
                                <option value="card">Card</option>
                                <option value="bkash">Bkash</option>
                                <option value="nagad">Nagad</option>
                                <option value="rocket">Rocket</option>
                            </select>
                        </div>

                        <!-- Status -->
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select value="{{$order->status}}" name="status" class="form-select" required>
                                <option value="" selected>{{$order->status}}</option>
                                <option value="pending">Pending</option>
                                <option value="processing">Processing</option>
                                <option value="completed">Completed</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                        </div>

                        <!-- Order Date -->
                        <div class="mb-3">
                            <label class="form-label">Order Date</label>
                            <input value="{{$order->order_date}}" name="order_date"  type="date" class="form-control" required>
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex justify-content-end gap-2">
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>


@endsection
