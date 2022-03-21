@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 ">
            <div class="card mt-2">
                <div class="card-header bg-primary col-md-12   d-flex flex-row ">
                <h3>My Reports</h3>
                    
                </div>
                <div class="card-body">
                <a href="{{ route('reports.create') }}" class="text-sm text-gray-700 dark:text-gray-500 underline text-md-end"><button class="btn text-primary float-right m-2" value="">Create New Report</button></a>
                    <table class="table table-stripped">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Site Name</td>
                            <td>Supervisor</td>
                            <td>Date Inspected</td>
                            <td>Work Area</td>
                            <td>Job Description</td>
                            <td>Completed By</td>
                            <td>ACTIONS</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $us)
                        <tr>
                            <td>{{$us->id}}</td>
                            <td>{{$us->site_name}}</td>
                            <td>{{$us->supervisor}}</td>
                            <td>{{$us->date_inspected}}</td>
                            <td>{{$us->work_area}}</td>
                            <td>{{$us->job_description}}</td>
                            <td>{{$us->completed_by}}</td>
                           
                            <td><a href="{{ route('reports.show', $us->id) }}">
                                    <h5 class="btn btn-sm btn-primary">View Report</h5>
                                    </>
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
@endsection