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
                    Assigned Inspectors
                </div>
                <div class="card-body">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <td >ID</td>
                                <td >Inspector Name</td>
                                <td >Supervisor</td>
                                <td >Task Assigned</td>
                                <td >ACTIONS</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $us)
                            <tr>
                                <td >{{$us->id}}</td>
                                <td >{{$us->inspector_name}}</td>
                                <td >{{$us->supervisor}}</td>
                                <td >{{$us->task_assigned}}</td>
                                <td ><a href={{ route('inspector.show', $us->id) }}><h5 class="btn btn-sm btn-primary">VIEW</h5></></td>
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