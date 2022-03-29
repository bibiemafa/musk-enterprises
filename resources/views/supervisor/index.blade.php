@extends('layouts.supervisor')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class= "col-md-10 ">
      
            <div class="card mt-2">
            @if (session('success'))
                <div class="alert alert-success text-center" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                <div class="card-header bg-primary col-md-12   d-flex flex-row ">
                    Inspectors
                </div>
                <div class="card-body">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                          
                                <td >Inspector Name</td>
                                <td >Email</td>
                                <td >Role</td>
                                <td >Reports Completed</td>
                                <td >ACTIONS</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $us)
                            <tr>
                        
                                <td >{{$us->name}}</td>
                                <td >{{$us->email}}</td>
                                <td >{{$us->role}}</td>
                                <td ><a href={{ route('inspector.create') }}><h5 class="btn btn-sm btn-primary">ASSIGN</h5></></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel col-md-10">
                    
                </div>
        </div>
    </div>


</div>
@endsection