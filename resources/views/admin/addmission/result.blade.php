@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        
            <div class="panel panel-info">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                   <div class="col-md-12">
                   	
                   	<h2>Search Result</h2>
                   <table class="table table-inverse">
                   	<thead>
                   		<tr>
                   			<th>Name</th>
                   			<th>Address</th>
                            <th>Allocation Info</th>
                             <th>Consultant Info</th>
                             <th>Addmit Date</th>
                   		
                   		</tr>
                   	</thead>
                   	<tbody>
                    @foreach($result as $doctor)
                    	<tr>
                   			
                               <td>{{$doctor->name}}</td>
                               <td>{{$doctor->address}}</td>
                               <td>{{$doctor->room_no}}</td>
                               <td>{{$doctor->consultant}}</td>
                               <td>{{$doctor->created_at->format('d-m-y')}}</td>
                        </tr>
                      @endforeach
                   	</tbody>
                   </table>
                   </div>
                </div>
            </div>
        </div>
</div>
@endsection
@section('script')

@endsection