@extends("layout.erp.app")
@section('content')

<div class="container mt-4">

    <h4 class="mb-3">Order Overview</h4>

    <div class="card shadow-sm">
        <div class="card-body">

            <div class="row mb-2">
                <div class="col-md-4 fw-bold">Order ID</div>
                <div class="col-md-8">#{{$order->id}}</div>
            </div>

            <div class="row mb-2">
                <div class="col-md-4 fw-bold">Customer Name</div>
                <div class="col-md-8">{{$order->customer_name}}</div>
            </div>

            <div class="row mb-2">
                <div class="col-md-4 fw-bold">Total Amount</div>
                <div class="col-md-8">৳ {{$order->total}}</div>
            </div>

            <div class="row mb-2">
                <div class="col-md-4 fw-bold">Payment Method</div>
                <div class="col-md-8">{{$order->payment_method}}</div>
            </div>

            <div class="row mb-2">
                <div class="col-md-4 fw-bold">Status</div>
                <div class="col-md-8">
                    <span class="badge bg-warning">{{$order->status}}</span>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-4 fw-bold">Order Date</div>
                <div class="col-md-8">{{$order->order_date}}</div>
            </div>

        </div>
         <div class="card-footer bg-light text-end">
                    <button class="btn btn-outline-secondary"><a href="{{url("category/orders")}}">Back</a></button>
                    <button class="btn btn-info ms-2"><a href="{{url("category/orders/$order->id/edit")}}">Edit</a></button>
                </div>
    </div>

</div>

@endsection
