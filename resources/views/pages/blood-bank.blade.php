@include('fontEnd.header')
@include('fontEnd.menu')
@include('fontEnd.banner')
<div class="container" style="background-color:white">
<br>
<div class="row">
<form action="{{url('/blood-search')}}" method="POST">
       {{csrf_field()}}
       <div class="col-md-8">
       <input type="text" name="q" class="form-control" placeholder="Search Blood">
       
       </div>
       <div class="col-md-4">
       <input type="submit" class="btn btn-primary">
       
       </div>
       </form>
</div>

    <div class="row"> 
<div class="col-md-12">

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Blood Group</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
    @foreach($bloods as $blood)
        <tr>
            <td scope="row">{{$blood->name}}</td>
            <td>{{$blood->blood_group}}</td>
            <td>{{$blood->phone}}</td>
        </tr>
      @endforeach
    </tbody>
</table>

{{ $bloods->render()}}
</div>
</div>
</div>
</div>
@include('fontEnd.footer')