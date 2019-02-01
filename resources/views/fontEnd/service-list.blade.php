 <!-- /.page header -->
    <div class="content">
        <div class="container">
            <div class="row">
                @foreach($medicines as $medicine)
                <div class="col-md-4 col-sm-4">
                    <div class="service-block text-center mb60">
                        <div class="service-img mb30">
                            <a href="service-detail.html" class="imghover"><img src="{{asset('public/images/service-1.jpg')}}" class="img-responsive" alt=""></a>
                        </div>
                        <h2><a href="#" class="heading-title">{{$medicine->name}}</a></h2>
                        <p>Mauris in tortor idelit luctus molestie velsedveli Sed quis bibendum elellus ipsum errhoncus veldui velobortis feugiat doivamus euelit erat. </p>
                        <a href="#" class="btn-link">Read More</a>
                    </div>
                </div>
              @endforeach
                <div class="col-md-4 col-sm-4">
                    <div class="service-block text-center">
                        <div class="service-img mb30">
                            <a href="#" class="imghover"><img src="images/service-2.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <h2><a href="#" class="heading-title">Vascular Dignostic</a></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adig elisce nulla nunc tincidunt vitae nibh eget iaculis viverra tonec volutpat, ipsum icidun.</p>
                        <a href="#" class="btn-link">Read More</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="service-block text-center">
                        <div class="service-img mb30">
                            <a href="#" class="imghover"><img src="images/service-3.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <h2><a href="#" class="heading-title">Invasive Procedures</a></h2>
                        <p>Vestibulum ac felis dolurabitur posuere tincidunt elit id rhonusce sapienleo hendrerit narenec vehicula uspendisse diam nisi dictsiti.</p>
                        <a href="#" class="btn-link">Read More</a>
                    </div>
                </div>
      </div> 
            


        </div>
    </div>