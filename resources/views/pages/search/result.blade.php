@include('fontEnd.header')
@include('fontEnd.menu')
@include('fontEnd.banner')
<br>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-center">Search Result</h3>
  </div>
  
  <div class="panel-body">
    <div class="row">
    @foreach($result as $r)
    <div class="col-md-4">
   <a href="{{url('/doctor-details',$r->id)}}"> <img src="{{asset($r->feature_image)}}" alt=""></a>
    <a href="{{url('/doctor-details',$r->id)}}"><p>{{$r->name}}</p></a>
    <p>{{$r->description}}</p>
    </div>

    @endforeach
    
    </div>
  </div>
</div>

</div>
</div>
</div>
@include('fontEnd.footer')