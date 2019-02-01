@include('fontEnd.header')

   @include('fontEnd.menu')
   @include('fontEnd.banner')
        <!-- /.navigation -->
        <!-- /.navigation -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <div class="page-caption">
                        <h1 class="page-title">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page header -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="widget widget-contact">
                                <h2 class="widget-title">Follw Us</h2>
                                <hr>
                                <address><i class="fa fa-map-marker"></i> 873 Fleming Way
                                    <br>Richmond, VA 23228 </address>
                                <ul class="listnone no-padding">
                                    <li><i class="fa fa-phone"></i>800-123-456</li>
                                    <li><i class="fa fa-envelope-o"></i>Info@architectural.com</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="widget widget-follwus">
                                <h2 class="widget-title">Opening Hours</h2>
                                <hr>
                                <div class="opening-time">
                                    <span>Mon-Fri</span><strong class="pull-right">8:00am-7:00pm</strong>
                                    <br>
                                    <span>Saturday </span><strong class="pull-right">9:00am–5:00pm</strong>
                                    <br>
                                    <span>Sunday </span><strong class="pull-right">9:00am–3:00pm</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="widget widget-follwus">
                                <h2 class="widget-title">Follw Us</h2>
                                <hr>
                                <div class="social-icon">
                                    <a href="#" class="solcial-link"><i class="fa fa-facebook-square"></i></a>
                                    <a href="#" class="solcial-link"><i class="fa fa-twitter-square"></i></a>
                                    <a href="#" class="solcial-link"><i class="fa fa-google-plus-square"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <h1>Get In Touch</h1>
                            <p>Complete the form below to speak with one of our experts and find out how we can help.</p>
                            <form class="form">
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-10 control-label" for="textinput">Name <span class="required">*</span></label>
                                    <div class="col-md-10">
                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-10 control-label" for="textinput">Email <span class="required">*</span></label>
                                    <div class="col-md-10">
                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-10 control-label" for="textinput">Phone <span class="required">*</span></label>
                                    <div class="col-md-10">
                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="col-md-10 control-label" for="selectbasic">Select Basic</label>
                                    <div class="col-md-10">
                                        <select id="selectbasic" name="selectbasic" class="form-control">
                                            <option value="1">Option one</option>
                                            <option value="2">Option two</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class="col-md-10 control-label" for="textarea">Text Area</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" rows="7" id="textarea" name="textarea"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-10">
                                    <button id="submit" name="singlebutton" class="btn btn-primary">Submit</button>
                                    <span class="required pull-right">* Field Are Required</span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    @include('fontEnd.footer')
    <!-- /.tiny-footer -->
    <!-- back to top icon -->
    <a href=" #0 " class="cd-top" title="Go to top">Top</a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.js"></script>
    <script type="text/javascript">
    $("#navigation").menumaker({
        title: "Menu",
        format: "multitoggle"
    });
    </script>
    <!-- animsition -->
    <script type="text/javascript" src="{{asset('/public/js/animsition.js')}}"></script>
    <script type="text/javascript" src="{{asset('/public/js/animsition-script.js')}}"></script>
    <!-- sticky header -->
    <script type="text/javascript" src="{{asset('/public/js/jquery.sticky.js')}}"></script>
    <script type="text/javascript" src="{{asset('/public/js/sticky-header.js')}}"></script>
    <!-- Back to top script -->
    <script src="{{asset('public/js/back-to-top.js')}}" type="text/javascript"></script>
  
</body>

</html>
