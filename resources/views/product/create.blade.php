@extends('layout.erp.app');
@section('content')







<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Add New Product</h5>
                </div>

                <div class="card-body">
                    <form action="{{url('category/products')}}" method="POST">
                        @csrf

                        <!-- Product Name -->
                        <div class="mb-3">
                            <label class="form-label">Product Name</label>
                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                placeholder="Enter product name"
                                required
                            >
                        </div>

                        <!-- Price -->
                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input
                                type="number"
                                name="price"
                                class="form-control"
                                placeholder="Enter product price"
                                step="0.01"
                                required
                            >
                        </div>

                        <!-- Discount -->
                        <div class="mb-3">
                            <label class="form-label">Discount (%)</label>
                            <input
                                type="number"
                                name="discount"
                                class="form-control"
                                placeholder="Enter discount percentage"
                                min="0"
                                max="100"
                            >
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea
                                name="description"
                                class="form-control"
                                rows="4"
                                placeholder="Write product description"
                            ></textarea>
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex justify-content-end gap-2">
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <button type="submit" class="btn btn-success">Save Product</button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>



@endsection


