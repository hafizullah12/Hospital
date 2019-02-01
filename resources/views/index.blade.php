@include('fontEnd.header')
@include('fontEnd.menu')
@include('fontEnd.slider')
<div class="section-space80"><!-- section-space80 -->
  <div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 text-center mb60">
            <h1>Hospital Services</h1>
            <hr>
        </div>
        
      <div class="col-md-12 col-sm-12">
        <div class="row">
            @foreach($services as $service)
            <div class="col-md-4 col-sm-4">
            <div class="service-block text-center mb60">
                <div class="service-img mb30">
                <img src="{{asset($service->feature_image)}}" alt=""></div>
                <h2><a href="#" class="heading-title">{{$service->name}}</a></h2>
                <p>{{$service->description}}</p>
                </div>
            </div>
            @endforeach


      </div>
  </div>
</div>
</div>
<!-- /.section-space80 -->
</div>

@include('fontEnd.welcome')
@include('fontEnd.message')
@include('fontEnd.review')
<!--News section-->
<div class="section-space80">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 text-center">
        <div class="mb60 section-title">
          <h1>Latest News</h1>
  <hr>        </div>
      </div>
    </div>
   
    <div class="row">
      @foreach($blogs as $blog)
      <div class="col-md-4 col-sm-4">
        <div class="post-holder mb40">
          <div class="post-img mb20"> 
          <a href="{{url('/news-details',$blog->id)}}" class="imghover">
          <img src="{{asset($blog->feature_image)}}" alt="" class="img-responsive"></a> </div>
          <div class="post-block">
            <div class="post-header mb20">
              <h3 class="post-title mb20"><a href="{{url('/news-details',$blog->id)}}" class="title">
              {{$blog->title}}</a></h3>
              <div class="post-meta"><!-- post meta --> 
                <span class="meta-date"><i class="fa fa-calendar"></i> {{$blog->created_at->format('d-m-y')}} </span>
                <span class="meta-comment"><i class="fa fa-comments"></i> <a href="#" class="meta-link">05 Comment </a></span> </div>
              <!-- /.post meta --> 
              <br>
             
              <div class="post">
              <p>{{str_limit(strip_tags($blog->description,100))}}.... 
              <a href="{{url('/news-details',$blog->id)}}">Read more</a></p>

                
              </div>


            </div>
          </div>
        </div>
      </div>


@endforeach

    

      </div>
    </div>
  </div>
</div>
<!-- End of News section-->
@include('fontEnd.quote')
@include('fontEnd.footer')

