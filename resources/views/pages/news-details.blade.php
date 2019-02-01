@include('fontEnd.header')
@include('fontEnd.menu')
@include('fontEnd.slider')

<!--News section-->
<div class="section-space80">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 text-center">
        <div class="mb60 section-title">
          <h1>Latest News</h1>
          <hr>
        </div>
      </div>
    </div>
    
    <div class="row">
   
      <div class="col-md-12 col-sm-12">
        <div class="post-holder mb40">
          <div class="post-img mb20"> <a href="" class="imghover">
          <img src="{{asset($blog->feature_image)}}" 
        
          alt="" class="img-responsive"></a> </div>
          <div class="post-block">
            <div class="post-header mb20">
              <h3 class="post-title mb20">
              <a href="#" class="title">
              {{$blog->title}}</a></h3>
              <div class="post-meta"><!-- post meta --> 
                <span class="meta-date"><i class="fa fa-calendar"></i> {{$blog->created_at->format('d-m-y')}} </span>
                <span class="meta-comment"><i class="fa fa-comments"></i> <a href="#" class="meta-link">05 Comment </a></span> </div>
              <!-- /.post meta --> 
              <br>
             
              <div class="post">
              <p>{{$blog->description}}</p>

              </div>


            </div>
          </div>
        </div>
      </div>




    

      </div>
    </div>
  </div>
</div>
<!-- End of News section-->

@include('fontEnd.footer')

