
@extends('layout.erp.app');
@section('content')

<style>
    body {
        font-family: 'Segoe UI', Tahoma, sans-serif;
        background: #f4f6f9;
        padding: 30px;
    }

    .card {
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        padding: 20px;
    }

    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }

    .card-header h2 {
        margin: 0;
        font-size: 20px;
        color: #333;
    }

    .card-header button {
        background: #0d6efd;
        border: none;
        color: #fff;
        padding: 8px 14px;
        border-radius: 5px;
        cursor: pointer;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    thead {
        background: #0d6efd;
        color: #fff;
    }

    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    tbody tr:hover {
        background: #f1f5ff;
    }

    .badge {
        background: #dc3545;
        color: #fff;
        padding: 4px 8px;
        border-radius: 4px;
        font-size: 12px;
    }

    .price {
        font-weight: 600;
        color: #198754;
    }
</style>



<div class="card">
    <div class="card-header">
        <h2>Product Table</h2>
        {{-- <h2><a href="{{url("category/products/create")}}">Add Product</a></h2> --}}
        <h2><a href="{{route("products.create")}}">Add Product</a></h2>

    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                @foreach($products as $product )


                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td class="price">${{$product->price}}</td>
                <td><span  class="badge">{{$product->discount}}%</span></td>
                <td>{{$product->description}}</td>
                <td>
                    {{-- /photos/{photo}/edit --}}
                    	{{-- /photos/{photo} --}}
                     {{-- <a href="{{ URL("system/users/$user->id/edit") }}">Edit</a> --}}
                    {{-- <a class="btn btn-info" href="{{url("category/products/$product->id/edit")}}">Edit</a>
                    <form action="{{url("category/products/$product->id")}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="confirm('Are you sure?')">Delete</button>

                    </form>
                    <a class="btn btn-secondary" href="{{url("category/products/$product->id")}}">Show</a> --}}

                    <div class="dropdown">
                        <button
                            class="btn btn-sm btn-outline-primary dropdown-toggle"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Actions
                        </button>

                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ url("category/products/$product->id") }}">
                                    Show
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url("category/products/$product->id/edit") }}">
                                    Edit
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form
                                    action="{{ url("category/products/$product->id") }}"
                                    method="POST"
                                    onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="dropdown-item text-danger">
                                        Delete
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </td>

            </tr>
            @endforeach


        </tbody>
    </table>
    <div class="margin-top:20px">
        {{$products->links()}}
    </div>
</div>


@endsection
