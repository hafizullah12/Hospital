@include('fontEnd.header')
@include('fontEnd.menu')
@include('fontEnd.banner')

 <br>
 <br>
    <!-- /.page header -->
       
         <div class="container">
            <div class="row">
            @include('admin.message')
              <div class="row"> 
            <div class="col-md-3 col-md-offset-2"> 
            
            <div class="service-img mb30">
             <a href="#" class="imghover">
             <img src="{{asset($doctors->feature_image)}}" 
             class="img-responsive img-thumbnil" 
            height="300" width="100" alt=""></a>
            </div>
            </div>
                 
                 <div class="col-md-3" style="margin-left:140px;">
                   <br>
                 <form action="{{url('/doctor-book')}}" method="POST">
                             {{csrf_field()}}
                            <input type="hidden" name="doctor_id" value="{{$doctors->id}}">
                            <input type="hidden" name="user_id">
                        
                            <i class="fa fa-arrow-right fa-1x"></i>
                            <button class="btn btn-primary">
                            Make Apponiment</button> 
                            </form>
                 </div>

                </div>
 
                 <div class="col-md-7" style="margin-left:185px; ">
              <table class="table">
                
                  
                      <tr class="danger">
                          <td scope="row" cl>Name</td>
                          <td>{{$doctors->name}}</td>
                       </tr>
                       <tr class="warning">
                       <td>Availability</td>
                       <td>{{$doctors->description}}</td>
                       </tr>
                       
                       <tr class="active">
                       <td>Dept</td>
                       <td>{{$doctors->sub_category}}</td>
                       </tr>

                       <tr class="active">
                       
                       <td>Room No</td>
                       <td>{{$doctors->address}}</td>
                       </tr>

                       <tr class="active"> 
                        <td>Phone</td>
                        <td>{{$doctors->phone}}</td>
                       </tr>

                       <tr class="active">
                       <td>Email</td>
                       <td>{{$doctors->email}}</td>
                       
                       </tr>
                  </tbody>
              </table>
                 
                 </div>
            
                   
      </div> 
    </div>    


@include('fontEnd.footer') 







