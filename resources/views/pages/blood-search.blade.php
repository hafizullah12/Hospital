@include('fontEnd.header')
@include('fontEnd.menu')
<div class="container" style="background-color:white">
<br>


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
    @foreach($result as $blood)
        <tr>
            <td scope="row">{{$blood->name}}</td>
            <td>{{$blood->blood_group}}</td>
            <td>{{$blood->phone}}</td>
        </tr>
      @endforeach
    </tbody>
</table>


</div>
</div>
</div>
</div>
@include('fontEnd.footer')