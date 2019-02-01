@include('fontEnd.header')
@include('fontEnd.menu')
@include('fontEnd.banner')
       <div class="content">
        <div class="container">
            <div class="row">
<div class="col-md-12">
       <form action="{{url('/search-result')}}" method="POST">
       {{csrf_field()}}
                <div class="form-group">
                    <label for="" class="col-md-2 control-label">Dept</label>
                    <div class="col-md-6">
                        <select name="q" id="" class="form-control">
                        <option value="">--Select Dept--</option>
                        @foreach($medicine as $m)
                        <option value="{{$m->sub_category}}">{{$m->sub_category}}</option>
                        @endforeach
                        </select>
                    </div>
                 </div>
                 </div>
                    OR
                 <div class="form-group">
                    <label for="" class="col-md-2 control-label">Name</label>
                    <div class="col-md-6">
                       <input type="text" name="name" class="form-control">
                    </div>
                 </div>
                 </div>
               <input type="submit" style="margin-left:590px;"class="btn btn-primary" value"Search">
                 
                {!! Form::close() !!}   
    </div>       
      </div> 
      </div>
    </div>


@include('fontEnd.footer') 

