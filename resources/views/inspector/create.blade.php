@extends('layouts.myapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Assign Inspector') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('inspector.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Supervisor Name') }}</label>

                            <div class="col-md-6">
                                <input id="supervisor" type="text" class="form-control @error('supervisor') is-invalid @enderror" name="supervisor" value="{{ $user }}" required autocomplete="supervisor" autofocus>

                                @error('supervisor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Inspector Name') }}</label>

                            <div class="col-md-6">
                                <input id="inspector_name" type="text" class="form-control @error('inspector_name') is-invalid @enderror" name="inspector_name" value="{{ old('inspector_name') }}" required autocomplete="inspector_name">

                                @error('inspector_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="task_assigned" class="col-md-4 col-form-label text-md-end">{{ __('Task') }}</label>

                            <div class="col-md-6">
                                <input id="task_assigned" type="text" class="form-control @error('task_assigned') is-invalid @enderror" name="task_assigned" value="{{ old('task_assigned') }}" required autocomplete="task_assigned">

                                @error('task_assigned')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                      
                        
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Assign Inspector') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection