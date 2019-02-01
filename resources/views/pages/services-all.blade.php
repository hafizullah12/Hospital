@include('fontEnd.header')
@include('fontEnd.menu')
@include('fontEnd.banner')

<!--News section-->
<div class="section-space80">
  <div class="container">
  <div class="row">
      <div class="col-md-12 col-sm-12 text-center">
        <div class="mb60 section-title">
          <h1>Services</h1>
        </div>
      </div>
    </div>
   
    <div class="row">
      @foreach($services as $blog)
      <div class="col-md-4 col-sm-4">
        <div class="post-holder mb40">
          <div class="post-img mb20"> 
         
          <img src="{{asset($blog->feature_image)}}"
          alt="" class="img-responsive"> </div>
          <div class="post-block">
            <div class="post-header mb20">
              <h3 class="post-title mb20">
                  <a href="" class="title">
              {{$blog->name}}</a></h3>
              <div class="post" style="font-size:22px;">
              <p>{{ $blog->description }}   
              </div>
              <div class="post-meta"><!-- post meta --> 
                <span class="meta-date" ><i class="fa fa-money 2X"></i> <p>{{$blog->price}} BDT</p>  </span>

                <br>
                <span class="meta-comment"><i class="fa fa-map-marker"></i> 
                <a href="#" class="meta-link"><p>Room No.{{$blog->location}}</p> </a></span> </div>
              <!-- /.post meta --> 
              <br>
             


            </div>
          </div>
        </div>
      </div>


@endforeach

    

      </div>
      {{ $services->render()}}
    </div>
  </div>
</div>
<!-- End of News section-->


@include('fontEnd.footer')

