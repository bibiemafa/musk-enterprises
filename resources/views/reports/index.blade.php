@extends('layouts.inspector')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11 ">
            <div class="card mt-2">
                <div class="card-header bg-primary float-center">
                    <h3 class="m-2 text-light " style="text-align: center;">All Inspections</h3>

                </div>
                <div class="card-body">
                  
                    <table class="table striped">
                        <thead>
                            <tr>
                                <td style="font-weight: bolder;">ID</td>
                                <td style="font-weight: bolder;">Site Name</td>
                                <td style="font-weight: bolder;">Supervisor</td>
                                <td style="font-weight: bolder;">Date Inspected</td>
                                <td style="font-weight: bolder;">Work Area</td>
                                <td style="font-weight: bolder;">Job Description</td>
                                <td style="font-weight: bolder;">Completed By</td>
                                <td style="font-weight: bolder;">ACTIONS</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reports as $us)
                            <tr>
                                <td>{{$us->id}}</td>
                                <td>{{$us->site_name}}</td>
                                <td>{{$us->supervisor}}</td>
                                <td>{{$us->date_inspected}}</td>
                                <td>{{$us->work_area}}</td>
                                <td>{{$us->job_description}}</td>
                                <td>{{$us->completed_by}}</td>

                                <td class="d-flex mt-1"><a href="{{ route('reports.show', $us->id) }}">
                                        <h5 class="btn btn-sm btn-primary mr-1">View</h5>
                                        </a>
                                        @if ($user == 'supervisor')
                                        <a href="{{ route('reports.show', $us->id) }}">
                                        <h5 class="btn btn-sm btn-danger">Edit</h5>
                                        </a> 
                                         @endif
                                        
                                        
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