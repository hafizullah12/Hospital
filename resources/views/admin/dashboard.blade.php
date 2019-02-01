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
      <li class="list-group-item"><a href="{{route('medicine.create')}}">Add New</a></li>
        <li class="list-group-item"><a href="{{route('medicine.index')}}">Show All</a></li>
                       
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
      
        
                <div class="panel panel-primary">
                 <div class="panel-heading text-center">Admin Panel</div>

                    <div class="panel-body">
                        -------
                        ------
                        <p>Image add here</p>
                </div>
                </div>
                </div>


        </div>
    </div>


</div>
@endsection
