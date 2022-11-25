@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Customers with no sale</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($customersWithNoSales as $customersWithNoSale)
                        <tr>
                            <td>{{ $customersWithNoSale->name }}</td>
                            <td>{{ $customersWithNoSale->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3>Customers with sale</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customersWithSales as $customersWithSale)
                    <tr>
                        <td>{{ $customersWithSale->name }}</td>
                        <td>{{ $customersWithSale->email }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3>Customers with sale and count</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Total</th>
                </tr>
                </thead>
                <tbody>
                @foreach($usersWithSaleCounts as $usersWithSaleCount)
                    <tr>
                        <td>{{ $usersWithSaleCount->name }}</td>
                        <td>{{ $usersWithSaleCount->total }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3>Product Sales</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Total</th>
                </tr>
                </thead>
                <tbody>
                @foreach($productWithSaleCounts as $productWithSaleCount)
                    <tr>
                        <td>{{ $productWithSaleCount->name }}</td>
                        <td>{{ $productWithSaleCount->total }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
