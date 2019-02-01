@include('fontEnd.header')
@include('fontEnd.menu')
@include('fontEnd.banner')
       <div class="content">
        <div class="container">
            <div class="row">
                @foreach($doctors as $medicine)
                <div class="col-md-4 col-sm-4">
                    <div class="service-block text-center mb60">
                        <div class="service-img mb30">
                            <a href="{{url('/doctor-details',$medicine->id)}}" class="imghover"><img src="{{asset($medicine->feature_image)}}" class="img-responsive" alt=""></a>
                        </div>
                        <h2><a href="{{url('/doctor-details',$medicine->id)}}" class="heading-title">{{$medicine->name}}</a></h2>
                        <p>{{$medicine->designation}}</p>
                        <p>{{$medicine->description}}</p>
                        <a href="{{url('/doctor-details',$medicine->id)}}" class="btn-link">View Profile</a>
                    </div>
                </div>
              @endforeach
               
             
      </div> 
            


        </div>
    </div>


@include('fontEnd.footer') 

