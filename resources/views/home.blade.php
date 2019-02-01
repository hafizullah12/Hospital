@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User  Page 
                <span style="margin-left:400px;">  You are logged in!</span></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Doctor Name:{{$doctor_name}}</p>
                   <h3>Serial No: <span>{{$serial}}</span></h3> 
                   <p>Please,keep Patience.....</p>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
