@extends('layout.erp.app');
@section('content')
    <style>
        body{
            background: linear-gradient(135deg, #f1f3f5, #dee2e6);
        }
        .product-card{
            border-radius: 18px;
            overflow: hidden;
        }
        .product-id{
            font-size: 0.85rem;
            color: #6c757d;
        }
        .price{
            font-size: 2rem;
            font-weight: 700;
            color: #198754;
        }
        .discount-badge{
            font-size: 0.95rem;
            padding: 8px 14px;
        }
        .divider{
            height: 1px;
            background: #dee2e6;
            margin: 20px 0;
        }
    </style>

<body>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card shadow-lg product-card">
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">Product Overview</h4>
                </div>

                <div class="card-body p-4">

                    <!-- ID -->
                    <p class="fw-bold product-id mb-1">Product ID: #00{{$product->id}}</p>

                    <!-- Name -->
                    <h2 class="fw-bold mb-3">{{$product->name}}</h2>

                    <!-- Price & Discount -->
                    <div class="row align-items-center mb-3">
                        <div class="col-md-6">
                            <span class="price">${{$product->price}}</span>
                        </div>
                        <div class="col-md-6 text-md-end mt-2 mt-md-0">
                            <span class="badge bg-danger discount-badge">
                                {{$product->discount}}% OFF
                            </span>
                        </div>
                    </div>

                    <div class="divider"></div>

                    <!-- Description -->
                    <div>
                        <h5 class="fw-semibold mb-2">Description</h5>
                        <p class="text-muted mb-0">
                            {{$product->description}}
                        </p>
                    </div>

                </div>

                <!-- Footer -->
                <div class="card-footer bg-light text-end">
                    <button class="btn btn-outline-secondary"><a href="{{url("category/products")}}">Back</a></button>
                    <button class="btn btn-info ms-2"><a href="{{url("category/products/$product->id/edit")}}">Edit</a></button>
                </div>
            </div>

        </div>
    </div>
</div>


</body>

@endsection
