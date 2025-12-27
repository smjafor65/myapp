@extends('layout.erp.app');

@section('css')
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
@endsection
