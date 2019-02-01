@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                Admin</div>

                <div class="panel-body">
                   <aside>
    <div class="dash" style="margin-bottom:10px;"> 
    <a href="{{url('/admin/dashboard')}}" class="btn btn-success btn-block" >Dashboard</a>
    </div>
    <div class="news" style="margin-bottom:10px;"> 
    
  <button type="button" class="btn btn-success btn-block" 
  data-toggle="collapse" data-target="#demo">NEWS</button>
  <div id="demo" class="collapse">
    <ul class="list-group"> 
    
    <li class="list-group-item"><a href="{{route('blog.create')}}">Add New</a></li>
    <li class="list-group-item"><a href="{{route('blog.index')}}">Show All</a></li>
    </ul>
  </div>
  </div> 

     <div class="patient" style="margin-bottom:10px;"> 
    
    <button type="button" class="btn btn-success btn-block" 
    data-toggle="collapse" data-target="#demo1">Patients</button>
    <div id="demo1" class="collapse">
      <ul class="list-group"> 
      <li  class="list-group-item">
                    <a href="{{url('/patient-addmission')}}">Patient Addmission</a></li>
                    <li class="list-group-item">
                    <a href="{{url('admin/all-patient')}}">Show All Patients</a></button>
                    </li>
      </ul>
    </div>
    </div>


     <div class="services" style="margin-bottom:10px;"> 
    
    <button type="button" class="btn btn-success btn-block" 
    data-toggle="collapse" data-target="#demo2">Services</button>
    <div id="demo2" class="collapse">
      <ul class="list-group"> 
      <li class="list-group-item"><a href="{{route('service.create')}}">Add New</a></li>
    <li class="list-group-item"><a href="{{route('service.index')}}">Show All</a></li>
      </ul>
    </div>
    </div>


     <div class="doctor" style="margin-bottom:10px;"> 
    
    <button type="button" class="btn btn-success btn-block" 
    data-toggle="collapse" data-target="#demo3">Doctors</button>
    <div id="demo3" class="collapse">
      <ul class="list-group"> 
      <li class="list-group-item"><a href="{{route('doctor.create')}}">Add New</a></li>
        <li class="list-group-item"><a href="{{route('doctor.index')}}">Show All</a></li>
                       
      </ul>
    </div>
    </div>


      <div class="medicine" style="margin-bottom:10px;"> 
    
    <button type="button" class="btn btn-success btn-block" 
    data-toggle="collapse" data-target="#demo4">Medicine</button>
    <div id="demo4" class="collapse">
      <ul class="list-group"> 
      <li class="list-group-item"><a href="{{route('doctor.create')}}">Add New</a></li>
        <li class="list-group-item"><a href="{{route('doctor.index')}}">Show All</a></li>
                       
      </ul>
    </div>
    </div>

      <div class="surgery" style="margin-bottom:10px;"> 
    
    <button type="button" class="btn btn-success btn-block" 
    data-toggle="collapse" data-target="#demo5">Surgery</button>
    <div id="demo5" class="collapse">
      <ul class="list-group"> 
                       
        <li class="list-group-item"><a href="{{route('surgery.create')}}">Add New Surgey</a></li>
     <li class="list-group-item"><a href="{{route('surgery.index')}}">Show All Surgey</a></li>
                       
      </ul>
    </div>
    </div>


 <div class="booking" style="margin-bottom:10px;"> 
    
    <button type="button" class="btn btn-success btn-block" 
    data-toggle="collapse" data-target="#demo6">Booking</button>
    <div id="demo6" class="collapse">
      <ul class="list-group"> 
                       
      <li class="list-group-item"><a href="{{url('/booking-all')}}">Show All</a></li>
     
                       
      </ul>
    </div>
    </div>         
                  
                    
      </aside>
                   
                </div>
            </div>
           
        </div>

        <div class="col-md-9">
@include('admin.message')
<button class="btn btn-warning pull-right">
<a href="{{url('admin/all-patient')}}">Show All Patients</a></button>
<div class="panel panel-primary">
    <div class="panel-heading text-center">Patient Addmission</div>
    <div class="panel-body">
    <form action="{{url('/patient-addmission/update',$patient->id)}}" method="post">
    {{csrf_field()}} 
    <div class="form-group"> 
    {!! Form::label('Patient Name') !!}
    {!! Form::text('name',$patient->name,['class'=>'form-control','required'=>'required']) !!}
    </div>
    <div class="form-group"> 
    {!! Form::label('Address') !!}
    {!! Form::text('address',$patient->address,['class'=>'form-control','required'=>'required']) !!}
    </div>
    <div class="form-group"> 
    {!! Form::label('Contact No.') !!}
    {!! Form::text('phone',$patient->phone,['class'=>'form-control','required'=>'required']) !!}
    </div>
    <div class="form-group"> 
    {!! Form::label('Guardian Info') !!}
    {!! Form::textarea('info',$patient->info,['class'=>'form-control','required'=>'required']) !!}
    </div>
    <div class="form-group"> 
    {!! Form::label('Problem') !!}
    {!! Form::text('problem',$patient->problem,['class'=>'form-control','required'=>'required']) !!}
    </div>
    <div class="form-group"> 
    {!! Form::label('Allocation Info.') !!}
    {!! Form::text('room_no',$patient->room_no,['class'=>'form-control','required'=>'required']) !!}
    </div>
    <div class="form-group"> 
    {!! Form::label('Under Consultant info') !!}
    {!! Form::text('consultant',$patient->consultant,['class'=>'form-control','required'=>'required']) !!}
    </div>
   
    <div class="form-group">
    	<input type="submit" class="btn btn-success btn-block" value="Update">
    </div>
    {!! Form::close() !!}
	</div>
  </div>
</div>
@endsection
@section('script')
@endsection