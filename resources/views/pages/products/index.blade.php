@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('products.create') }}">
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
            var $table = $('#prod-table').DataTable();

            $("#prod-table").on('click', '.btn-delete', function (e){
                e.preventDefault();
                var url = $(this).attr('href');
                $.ajax({
                    method: "DELETE",
                    url: url,
                    data: {
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function (){
                        toastr.success('Deleted Successfully')
                        $table.draw();
                    },
                });

            })
        });
    </script>
@endpush
