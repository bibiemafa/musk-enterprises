@extends('layouts.myapp')

@section('content')
<section class="Splash container-fluid" style="margin-top : -30px !important">
    <div class="video-container">
          <img src="img/pic1.jpeg" alt="" srcset="" style="width: 50%; height : 80vh">
    </div>
    <div class="row mtt-5">
        <div class="card">
            <div class="card-header">MUSK ENTERPRISES</div>
            <div class="card-body">
               <h3>SMART SOLUTIONS TO YOUR QUALITY CONTROL INSPECTIONS</h3>
            </div>
        </div>
    </div>
</section>

<div class="card-body bg-white">
    @if (session('status'))
    <div class="alert alert-success bg-danger text-light" role="alert">
        {{ session('status') }}
    </div>
    @endif
    @if (session('success'))
    <div class="alert alert-success bg-success text-light" role="alert">
        {{ session('success') }}
    </div>
    @endif
  
  

</div>
<div class="container">
    <div class="row mt-2">
        <div class="col-md-12">
          <div class="card">
              <div class="card-header">WHAT DO WE DO</div>
              <div class="card-body">
                  <p class="p-2 ">
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos fugiat amet itaque magnam 
                      officia dolorem provident aut praesentium in autem voluptatum at,
                       voluptate esse molestiae repudiandae quam dicta. Repudiandae, corporis!
                  </p>
              </div>
          </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            
        </div>
    </div>
</div>

<div class="container-fluid bg-primary mt-5">
    <div class="row p-2  ">
        <div class="col-md-12 text-center text-white">
            <h5>Copyright © 2022, <span class="text-light">Musk Enterprises</span> ,  <i>Inspectors</i>, All rights reserved.</h5>
        </div>
    </div>
</div>
</div>
@endsection