@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <div class="row pull-right">
            <a href="/admin/project/create" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Create </a>
        </div>
        <div class="row">
            <table class="table table-condensed" id="projects-table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
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
            $('#projects-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.project.data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'title', name: 'title' },
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        });
    </script>
@endpush