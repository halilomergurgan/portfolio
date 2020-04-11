@extends('admin.layouts.master')

@section('content')

    <div class="container">
        <div class="row pull-right">
            <a href="/admin/tag/create" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Create </a>
        </div>
        <div class="row">
            <table class="table table-condensed" id="tags-table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
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
            $('#tags-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.tag.data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        });
    </script>
@endpush