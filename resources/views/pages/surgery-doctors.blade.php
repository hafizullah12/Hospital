@include('fontEnd.header')
@include('fontEnd.menu')
@include('fontEnd.banner')

 
    <!-- /.page header -->
        <div class="content">
        <div class="container">
            <div class="row">
                @foreach( $doctors as $doctor)
                <div class="col-md-4 col-sm-4">
                    <div class="service-block text-center mb60">
                        <div class="service-img mb30">
                            <a href="{{url('/doctor-details',$doctor->id)}}" class="imghover"><img src="{{asset($doctor->feature_image)}}" class="img-responsive" alt=""></a>
                        </div>
                        <h2><a href="{{url('/doctor-details',$doctor->id)}}" class="heading-title">{{$doctor->name}}</a></h2>
                        <p>Mauris in tortor idelit luctus molestie velsedveli Sed quis bibendum elellus ipsum errhoncus veldui velobortis feugiat doivamus euelit erat. </p>
                        <a href="{{url('/doctor-details',$doctor->id)}}" class="btn-link">View Profile</a>
                    </div>
                </div>
              @endforeach
            
              
      </div> 
            


        </div>
    </div>


@include('fontEnd.footer') 

