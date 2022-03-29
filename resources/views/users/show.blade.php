@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-2">
                <div class="card-header " style="font-weight: bolder; font-size : 20px">Displaying Data for {{$user->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                    <div class="row mt-3 ml-5">


                        <div class="col-md-6">
                            <h5 class="m-2 p-3"><strong>Registered On</strong> : {{$user->created_at}} </h5>
                            <h5 class="m-2 p-3"><strong>Full Name</strong> : {{$user->name}}</h5>
                        </div>
                        <div class="col-md-6">
                            <h5 class="m-2 p-3"><strong>Email Address</strong> : {{$user->email}} </h5>
                            <h5 class="m-2 p-3"><strong>Role</strong> : {{$user->role}}</h5>


                        </div>



                    </div>
                    <div class="row ml-5">
                        <div class="col-md-2"><a href="{{ route('users.edit', $user->id) }}" class="ml-4 mr-2 text-light btn btn-xs btn-primary btn-flat">Update Data</a></div>
                        <div class="col-md-2">
                        <form method="POST" action="{{ route('users.destroy',$user->id) }}">
                            @csrf
                            @method('DELETE')
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                        </form>
                        </div>
                       
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection