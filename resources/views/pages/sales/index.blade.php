@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('sales.create') }}">
                <button class="btn btn-primary">Create</button>
            </a>
        </div>
        <div class="card-body">
            {!! $dataTable->table(['id' => 'prod-table']) !!}
        </div>
    </div>
@endsection
@push('scripts')
    {!! $dataTable->scripts() !!}
    <script>
        $(function (){

        });
    </script>
@endpush
