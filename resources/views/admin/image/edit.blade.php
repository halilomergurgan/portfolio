@extends('admin.layouts.master')

@section('content')
    <div class="container">
        {!! Form::open(['url' => url('/admin/image/update'), 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

        <input type="hidden" name="id" value="{{$image->id}}">
        <div class="form-group">
            <label for="name" class="control-label"> {{$image->name}}</label>
            <img src="{{$image->path}}" height="200">
        </div>

        <div class="form-group">
            <label for="name" class="control-label">Change</label>
            <input type="file" name="image_file" />
        </div>
        <input type="submit" class="btn btn-primary"/>
        {!! Form::close() !!}
    </div>
@endsection