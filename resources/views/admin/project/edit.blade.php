@extends('admin.layouts.master')

@section('content')
    <div class="container">
        {!! Form::open(['url' => url('/admin/project/update'), 'method' => 'POST']) !!}
        <input type="hidden" name="id" value="{{$project->id}}">
        <div class="form-group">
            <label for="name" class="control-label">Name</label>
            <input type="text" class="form-control" name="title" value="{{$project->title}}">
        </div>
        <div class="form-group">
            <label for="lyrics" class="control-label">Lyrics</label>
            <textarea name="content" class="form-control" rows="4">{{$project->content}}</textarea>
        </div>
        <input type="submit" class="btn btn-primary"/>
        {!! Form::close() !!}
    </div>
@endsection


@push('scripts')
<script>
    CKEDITOR.replace( 'content' );
</script>
@endpush