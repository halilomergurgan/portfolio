@extends('admin.layouts.master')

@section('content')
    <div class="container">
        {!! Form::open(['url' => url('/admin/project/store'), 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

        <div class="form-group">
            <label for="name" class="control-label">Title</label>
            <input type="text" class="form-control" name="title">
        </div>

        <div class="form-group">
            <label for="name" class="control-label">Content</label>
            <textarea class="form-control" name="content" rows="4"></textarea>
        </div>

        <div class="form-group">
            <label for="name" class="control-label">Tags</label>
            {!! Form::select('project_tags[]', $tags, null, ['id' => 'tags', 'multiple' => 'multiple', 'class'=>'form-control selectpicker']) !!}
        </div>

        <div class="form-group">
            <label for="name" class="control-label">Project Cover</label>
            <input type="file" name="project_cover" />
        </div>

        <div class="form-group">
            <label for="name" class="control-label">Project Images</label>
            <input type="file" name="project_images[]" multiple />
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