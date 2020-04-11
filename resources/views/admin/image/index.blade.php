@extends('admin.layouts.master')

@section('content')

    <div class="container">
        <div class="row">
            <table class="table table-condensed" id="images-table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            $('#images-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.image.data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    {data: 'path', name: 'path', orderable: false, searchable: false, render: function (data, type, full, meta) {
                        return "<img src=\"" + data + "\" height=\"50\"/>";
        },},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        });
    </script>
@endpush