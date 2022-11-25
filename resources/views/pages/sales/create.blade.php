@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('sales.index') }}">Sales</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('sales.store') }}">
                @csrf
                <div class="form-group row m-2">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Customer</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="user_id">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row m-2">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Product</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="product_id">
                            @foreach($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                        @error('product_id')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row m-2">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Quantity</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('quantity') is-invalid @enderror"
                               id="quatity" name="quantity" placeholder="Enter the quantity">
                        @error('quantity')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row m-2">
                    <button class="col-sm-2 col-form-label btn btn-primary" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
