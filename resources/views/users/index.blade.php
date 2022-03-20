@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-2">
                <div class="card-header " style="font-weight: bolder; font-size : 20px">{{ __('User Management:: All Users') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    
                    <div class="row m-5">
                            <h4 class="ml-5">Available Users as at Date</h4>
                            <div class="col-md-4"></div>
                            <table class="table table-striped" id="data">
                                <thead>
                                    <tr>

                                        <th scope="col">Full Name</th>
                                        <th scope="col">Email Address</th>
                                        <th scope="col">Role Assigned</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $r)
                                    <tr>

                                        <td>{{ $r->name }}
                                        </td>
                                        <td>{{ $r->email }}</td>

                                        <td>{{ $r->role }}</td>

                                        <td>
                                            <a href="" class="text-white">
                                                <h5 class=" btn btn-primary">View</h5>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
