@include('fontEnd.header')
@include('fontEnd.menu')
@include('fontEnd.banner')
       <div class="content">
        <div class="container">
            <div class="row">
                @foreach($surgeries as $medicine)
                <div class="col-md-4 col-sm-4">
                    <div class="service-block text-center mb60">
                        <div class="service-img mb30">
                            <a href="service-detail.html" class="imghover"><img src="{{asset($medicine->feature_image)}}" class="img-responsive" alt=""></a>
                        </div>
                        <h2><a href="{{url('/surgery-doctors',$medicine->name)}}" class="heading-title">{{$medicine->name}}</a></h2>
                        <p>{{$medicine->description}}</p>
                    </div>
                </div>
              @endforeach
               
                
      </div> 
            


        </div>
    </div>


@include('fontEnd.footer') 

