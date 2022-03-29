@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-2">
                <div class="card-header " style="font-weight: bolder; font-size : 20px">{{ __('User Management:: All Users') }}</div>

                <div class="card-body">


                    <div class="row m-5">
                        @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert" onclick='window.location.reload(true);'>×</button>
                            {{ session('danger') }}
                        </div>
                        @endif
                        @if (session('danger'))
                        <div class="alert alert-danger" role="alert">
                            <a href="#" class="close" data-dismiss="alert" class="close" onclick='window.location.reload(true);'>&times;</a>
                            {{ session('danger') }}
                        </div>
                        @endif
                        <h4 class="ml-5">Available Users as at Date</h4>
                        <div class="col-md-4"></div>
                        <table class="table table-striped col-md-10" id="data">
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
                                        <a href="{{ route('users.show', $r->id) }}" class="text-white">
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