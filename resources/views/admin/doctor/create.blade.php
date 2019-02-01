<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  
    <link href="{{asset('/public/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="{{asset('/public/css/style.css')}}">
<!-- animsition css -->
<link rel="stylesheet" type="text/css" href="{{asset('/public/css/animsition.min.css')}}">
<!-- Font Awesome CSS -->
<link href="{{asset('/public/css/font-awesome.min.css')}}" rel="stylesheet">
  
  
  </head>
  <body>
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
           
<button class="btn btn-warning pull-right"><a href="{{route('doctor.index')}}">Show All Doctors</a></button>
<div class="panel panel-primary">
    <div class="panel-heading">Add New Doctor</div>
    @include('admin.message')
    <div class="panel-body">
    {!! Form::open(['action'=>'DoctorController@store','files'=>true]) !!}
    <div class="form-group"> 
    {!! Form::label('Name') !!}
    {!! Form::text('name',null,['class'=>'form-control','required'=>'required']) !!}
    </div>

    <div class="form-group"> 
    {!! Form::label('Availability') !!}
    {!! Form::text('description',null,['class'=>'form-control','required'=>'required']) !!}
    </div>

	
    <div class="form-group">
    {!! Form::label('Category') !!}
      <select id="country" name ="category" class="form-control"></select> 
      </div>
      	 
    <div class="form-group">
      {!! Form::label('Sub_Category') !!}
     <select name ="sub_category" id ="state" class="form-control"></select> 
</div>
  <div class="form-group"> 
    {!! Form::label('Designation') !!}
    {!! Form::text('designation',null,['class'=>'form-control','required'=>'required']) !!}
    </div>

    <div class="form-group"> 
    {!! Form::label('Email') !!}
    {!! Form::text('email',null,['class'=>'form-control','required'=>'required']) !!}
    </div>


    <div class="form-group"> 
    {!! Form::label('Phone No.') !!}
    {!! Form::text('phone',null,['class'=>'form-control','required'=>'required']) !!}
    </div>

    <div class="form-group"> 
    {!! Form::label('Room No.') !!}
    {!! Form::text('address',null,['class'=>'form-control','required'=>'required']) !!}
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


</div>
          </div>
      </div>
      </div>
      <script>
    
    var country_arr = new Array
    ("Medicine", "Surgery","Gyaenocology");
    
    // States
    var s_a = new Array();
    s_a[0]="";
    s_a[1]="Neurology|Cardiology|Pulmonology|Gastroenterology|Haematology|Dermatology & Venerology|Pediatrics|Oncology|Rheumatology|Neonatology|Hepatology|Rdialogy & Imaginary|Iternal Medicine|Transfussion Medicine|Endrocrinology & Metabolism|Family Medicine|Psychiatry|Palliative Medicine|Physical Medicine";
    s_a[2]="Thoraoic Surgery|Cardiac Surgery|Neuro Surgery|General Surgery|Otolartngeology Surgery|Orthopedics|Pediatric Surgery|Opthalmology Surgery|Plastic & Burn Surgery|Orology|Nephrology|Colorectal Surgeon";
    s_a[3]="Gyaenocology";
    
    
    function populateStates( countryElementId, stateElementId ){
      
      var selectedCountryIndex = document.getElementById( countryElementId ).selectedIndex;
    
      var stateElement = document.getElementById( stateElementId );
      
      stateElement.length=0;	// Fixed by Julian Woods
      stateElement.options[0] = new Option('Select One','');
      stateElement.selectedIndex = 0;
      
      var state_arr = s_a[selectedCountryIndex].split("|");
      
      for (var i=0; i<state_arr.length; i++) {
        stateElement.options[stateElement.length] = new Option(state_arr[i],state_arr[i]);
      }
    }
    
    function populateCountries(countryElementId, stateElementId){
      // given the id of the <select> tag as function argument, it inserts <option> tags
      var countryElement = document.getElementById(countryElementId);
      countryElement.length=0;
      countryElement.options[0] = new Option('Select One','-1');
      countryElement.selectedIndex = 0;
      for (var i=0; i<country_arr.length; i++) {
        countryElement.options[countryElement.length] = new Option(country_arr[i],country_arr[i]);
      }
    
      // Assigned all countries. Now assign event listener for the states.
    
      if( stateElementId ){
        countryElement.onchange = function(){
          populateStates( countryElementId, stateElementId );
        };
      }
    }
        </script>
        <script language="javascript">
            populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
            populateCountries("country2");
            populateCountries("country2");
        </script>
            
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>