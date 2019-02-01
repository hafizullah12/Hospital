@extends('layouts.app')
@section('content')
<div class="container">
@include('admin.message')
<button class="btn btn-warning pull-right"><a href="{{route('blog.index')}}">Show All News</a></button>
<div class="panel panel-primary">
    <div class="panel-heading text-center">Edit News</div>
    <div class="panel-body">
    {!! Form::open(['action'=>'BlogController@update','files'=>true]) !!}
    <div class="form-group"> 
    {!! Form::label('Title') !!}
    {!! Form::text('title',$post->title,['class'=>'form-control','required'=>'required']) !!}
    </div>
    <div class="form-group"> 
    {!! Form::label('Description') !!}
    {!! Form::textarea('description',null,['class'=>'form-control','required'=>'required']) !!}
    </div>
   <div class="form-group"> 
    {!! Form::label('Picture') !!}
    {!! Form::file('feature_image',null,['class'=>'form-control','required'=>'required']) !!}
    </div>
    <div class="form-group"> 
    {!! Form::label('Status') !!}
   {!! Form::select('status',
    ['published' => 'Published','unpublished' => 'Unpublished'],null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
    	<input type="submit" class="btn btn-success btn-block" value="Save">
    </div>
    {!! Form::close() !!}
	</div>
  </div>
</div>
@endsection
@section('script')
@endsection