@extends('admin.layouts.master')

@section('content')
    <div class="container">
        {!! Form::open(['url' => url('/admin/tag/store'), 'method' => 'POST']) !!}

        <input type="hidden" name="id" value="{{$tag->id}}">
        <div class="form-group">
            <label for="name" class="control-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$tag->name}}">
        </div>
        <input type="submit" class="btn btn-primary"/>
        {!! Form::close() !!}
    </div>
@endsection