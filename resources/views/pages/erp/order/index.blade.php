@extends('layout.erp.app');
@section('content')

    <style>
        body {
            background: #f8f9fa;
        }
        .status-badge {
            font-size: 0.85rem;
            padding: 6px 10px;
            border-radius: 6px;
        }
        .actions-dropdown button {
            min-width: 100px;
        }


    </style>

    <form class="d-flex w-50" action="{{url("category/orders")}}" method="GET">
    <input
        value="{{request("search")}}"
                class="form-control search-input"
                type="text"
                placeholder="Search orders, customers..."
                id="search" name="search"
    >
    <button class="btn btn-primary" type="submit">
        Search
    </button>
</form>


        {{-- <div class="container mt-4">
    <form class="d-flex justify-content-center"action="{{url("category/orders")}}" method="GET">
        <div class="input-group input-group-lg w-50">
            <input
                value="{{request("search")}}"
                class="form-control search-input"
                type="text"
                placeholder="Search orders, customers..."
                id="search" name="search"
            >
            <button class="btn btn-primary rounded-pill ms-2 px-4" type="submit">
                Search
            </button>
        </div>
    </form>
</div> --}}





<div class="container my-5">
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Orders List</h5>
            <h5 class="mb-0"><a href="{{route("category.orders.create")}}">Create Orders</a></h5>
            <span class="badge bg-success">Total Orders: 120</span>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Customer</th>
                            <th>Total</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th>Order Date</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order )
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->customer_name}}</td>
                            <td>${{$order->total}}</td>
                            <td>{{$order->payment_method}}</td>
                           <td>
        @php
            $statusClass = match($order->status) {
                'pending' => 'bg-warning text-dark',
                'processing' => 'bg-info text-white',
                'completed' => 'bg-success',
                'cancelled' => 'bg-danger',
                default => 'bg-secondary'
            };
        @endphp
        <span class="badge {{ $statusClass }}">{{ ucfirst($order->status) }}</span>
    </td>
                            <td>{{$order->order_date}}</td>
                            <td class="text-end actions-dropdown">
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                        Actions
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{route("category.orders.show",$order->id)}}">View</a></li>
                                        <li><a class="dropdown-item" href="{{route("category.orders.edit",$order->id)}}">Edit</a></li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        @endforeach


                    </tbody>
                </table>
                <div>{{$orders->appends(request()->query())->links()}}</div>
            </div>
        </div>

    </div>
</div>



@endsection
