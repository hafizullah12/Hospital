<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="Are you small and local cardiology clinic and hospital? Download our free website template for your cardiology website template. Its Free!">
<meta name="keywords" content="medical website templates bootstrap,medical website templates free download,medical website templates free, cardiology website templates,cardiology website design,cardiology websites for doctors,cardiology website templates free,
veterinary cardiology website, pediatric cardiology website">
<title>Hospital Management</title>
<!-- Bootstrap -->
<link href="{{asset('/public/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="{{asset('/public/css/style.css')}}">
<!-- animsition css -->
<link rel="stylesheet" type="text/css" href="{{asset('/public/css/animsition.min.css')}}">
<!-- Font Awesome CSS -->
<link href="{{asset('/public/css/font-awesome.min.css')}}" rel="stylesheet">
<!-- font css -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Merriweather:400,400i,700,700i,900,900i" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="animsition">
<div class="top-header"><!-- top header -->
  <div class="container">
    <div class="row">
   
          <div class="col-md-3">
              <a class="logo" href="{{url('/')}}">
            <img src="{{asset('/public/images/logo.png')}}" alt="">
            </a> 
          </div>
          
             <div class="col-md-3">
              <i class="fa fa-clock-o"></i>Sun to sat: 10:00am to 6:00pm
             </div>

              <div class="col-md-2">
                 <i class="fa fa-phone"></i> <a href="#">+8801777643121</a>
              </div>
              <div class="col-md-2">
                 <i class="fa fa-envelope-o"></i> <a href="#">info@hospital.com</a>
              </div>
              <div class="col-md-2">
              <div class="flex-center position-ref full-height">
              
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Profile</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
        </div>
              </div>

    </div>
    
  </div>
</div> 










