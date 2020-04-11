@extends('admin.layouts.master')

@section('content')
    <div class="container">
        {!! Form::open(['url' => url('/admin/image/store'), 'method' => 'POST']) !!}

            <div class="form-group">
                <label for="name" class="control-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="name" class="control-label">Tags</label>
                {!! Form::select('image_type', $image_types, null, ['id' => 'image_type', 'class'=>'form-control selectpicker']) !!}
            </div>
            <input type="submit" class="btn btn-primary"/>
        {!! Form::close() !!}
    </div>
@endsection