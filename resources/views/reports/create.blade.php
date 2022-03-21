@extends('layouts.myapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">{{ __('Health, Safety,Quality and Environmental Site Inspection') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('reports.store') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-4">

                                <label for="name" class="col-md-4 col-form-label text-md-start">{{ __('Site Name') }}</label>

                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="site_name" value="{{ old('site_name') }}"  required autocomplete="site_name" >

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="name" class="col-md-4 col-form-label text-md-start">{{ __('Work Area') }}</label>

                                <input type="text" class="form-control @error('work_area') is-invalid @enderror" name="work_area" value="{{ old('work_area') }}"  required autocomplete="work_area" >

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="name" class="col-md-4 col-form-label text-md-start">{{ __('Supervisor') }}</label>

                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="supervisor" value="{{ old('supervisor') }}"  required autocomplete="supervisor" >

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="col-md-4">

                                <label for="name" class="col-md-4 col-form-label text-md-start">{{ __('Completed By') }}</label>

                                <input type="text" class="form-control @error('completed_by') is-invalid @enderror" name="completed_by" value="{{ old('completed_by') }}"  required autocomplete="completed_by" >

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="name" class="col-md-4 col-form-label text-md-start">{{ __('Job Description') }}</label>

                                <input type="text" class="form-control @error('job_description') is-invalid @enderror" name="job_description" value="{{ old('job_description') }}"  required autocomplete="job_description" >

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="name" class="col-md-4 col-form-label text-md-start">{{ __('Inspector') }}</label>

                                <input type="text" class="form-control @error('inspector') is-invalid @enderror" name="inspector" value="{{Auth::user()->name}}"  required autocomplete="inspector" disabled >

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-md-4">

                                <label for="name" class="col-md-4 col-form-label text-md-start">{{ __('Date') }}</label>

                                <input type="text" class="form-control @error('date_inspected') is-invalid @enderror" name="date_inspected" value="{{ $date }}"  required autocomplete="date_inspected" disabled>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="name" class="col-md-4 col-form-label text-md-start">{{ __('Type') }}</label>

                                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}"  required autocomplete="type" >

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                        </div>


                        <hr>
                        <table class="table table-bordered striped">

                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Interventions</th>
                                    <th>Comments</th>
                                    <th>Completed</th>
                                    <th>Action Taken</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <h4>A. Working Standards</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        1. Work At Height
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('wah_intervention') is-invalid @enderror" name="wah_intervention" value="{{ old('wah_intervention') }}"  required autocomplete="wah_intervention" >
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('wah_comment') is-invalid @enderror" name="wah_comment" value="{{ old('wah_comment') }}"  required autocomplete="wah_comment" >
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('wah_completed') is-invalid @enderror" name="wah_completed" value="{{ old('wah_completed') }}"  required autocomplete="wah_completed" >
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('wah_action') is-invalid @enderror" name="wah_action" value="{{ old('wah_action') }}"  required autocomplete="wah_action" >
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        2. Lifting Operations- Crane, Fork Lift Truck, Hoist
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('lo_intervention') is-invalid @enderror" name="lo_intervention" value="{{ old('lo_intervention') }}"  required autocomplete="lo_intervention" >
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('lo_comment') is-invalid @enderror" name="lo_comment" value="{{ old('lo_comment') }}" required autocomplete="lo_comment" >
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('lo_completed') is-invalid @enderror" name="lo_completed" value="{{ old('lo_completed') }}"  required autocomplete="lo_completed" >
                                    </td>
                                    <td>
                                        <input type="text" class="form-control @error('lo_action') is-invalid @enderror" name="lo_action" value="{{ old('lo_action') }}"  required autocomplete="lo_action" >
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        3. Certification- Daily Checksheets for MEWP and FLP
                                    </td>
                                    <td>
                                        <input id="cet_intervention" type="text" class="form-control @error('name') is-invalid @enderror" name="cet_intervention" value="{{ old('cet_intervention') }}" required autocomplete="cet_intervention" >
                                    </td>
                                    <td>
                                        <input  type="text" class="form-control @error('cet_comment') is-invalid @enderror" name="cet_comment" value="{{ old('cet_comment') }}"  required autocomplete="cet_comment" >
                                    </td>
                                    <td>
                                        <input id="cet_comment" type="text"class="form-control @error('cet_completed') is-invalid @enderror" name="cet_completed" value="{{ old('cet_comment') }}"  required >
                                    </td>
                                    <td>
                                        <input id="cet_action" type="text"class="form-control @error('cet_action') is-invalid @enderror" name="cet_action" value="{{ old('cet_action')}}" required >
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        4. Confined Space Work
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('con_intervention') is-invalid @enderror" name="con_intervention" value="{{ old('con_intervention') }}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('con_comment') is-invalid @enderror" name="con_comment" value="{{ old('con_comment')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('con_completed') is-invalid @enderror" name="con_completed" value="{{ old('con_completed')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('con_action') is-invalid @enderror" name="con_action" value="{{ old('con_action')}}" required >
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        5. Electrical Work
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('el_intervention') is-invalid @enderror" name="el_intervention" value="{{ old('el_intervention')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('el_comment') is-invalid @enderror" name="el_comment" value="{{ old('el_comment')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('el_completed') is-invalid @enderror" name="el_completed" value="{{ old('el_completed')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('el_action') is-invalid @enderror" name="el_action" value="{{ old('el_action')}}" required >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>B. Quality</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6. Site Setup and Appearance, Signage
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('st_intervention') is-invalid @enderror" name="st_intervention" value="{{ old('st_intervention')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('st_comment') is-invalid @enderror" name="st_comment" value="{{ old('st_comment')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('st_comleted') is-invalid @enderror" name="st_completed" value="{{ old('st_comleted')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('st_action') is-invalid @enderror" name="st_action" value="{{ old('st_action')}}" required >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        7. Paperwork ( Permits, Risk Assessment, Method Statement)
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('pw_intervention') is-invalid @enderror" name="pw_intervention" value="{{ old('pw_intervention')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('pw_comment') is-invalid @enderror" name="pw_comment" value="{{ old('pw_comment')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('pw_completed') is-invalid @enderror" name="pw_completed" value="{{ old('pw_completed')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('pw_action') is-invalid @enderror" name="pw_action" value="{{ old('pw_action')}}" required >
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        8. Certification - Training, Insuarance Inspection, Induction Current
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('ct_intervention') is-invalid @enderror" name="ct_intervention" value="{{ old('ct_intervention')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('ct_comment') is-invalid @enderror" name="ct_comment" value="{{ old('cet_comment')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('ct_completed') is-invalid @enderror" name="ct_completed" value="{{ old('ct_completed')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('ct_action') is-invalid @enderror" name="ct_action" value="{{ old('ct_action')}}" required >
                                    </td>


                                </tr>

                                <tr>
                                    <td>
                                        <h4>C. Site Rules</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        9. Hot Work
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('sr_intervention') is-invalid @enderror" name="sr_intervention" value="{{ old('sr_intervention')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('sr_comment') is-invalid @enderror" name="sr_comment" value="{{ old('sr_comment')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('sr_completed') is-invalid @enderror" name="sr_completed" value="{{ old('sr_completed')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('sr_action') is-invalid @enderror" name="sr_action" value="{{ old('sr_action')}}" required >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        10. Isolation and Lock Offs
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('iso_intervention') is-invalid @enderror" name="iso_intervention" value="{{ old('v')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('iso_comment') is-invalid @enderror" name="iso_comment" value="{{ old('iso_comment')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('iso_completed') is-invalid @enderror" name="iso_completed" value="{{ old('iso_completed')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('iso_action') is-invalid @enderror" name="iso_action" value="{{ old('iso_action')}}" required >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        11. Fire Exits and Escape Routes
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('fr_intervention') is-invalid @enderror" name="fr_intervention" value="{{ old('fr_intervention')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('fr_comment') is-invalid @enderror" name="fr_comment" value="{{ old('fr_comment')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('fr_completed') is-invalid @enderror" name="fr_completed" value="{{ old('fr_completed')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('fr_action') is-invalid @enderror" name="fr_action" value="{{ old('fr_action')}}" required >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        12. Awareness - Fire Exit, Assembly Point
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('aw_intervention') is-invalid @enderror" name="aw_intervention" value="{{ old('aw_intervention')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('aw_comment') is-invalid @enderror" name="aw_comment" value="{{ old('aw_comment')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('aw_completed') is-invalid @enderror" name="aw_completed" value="{{ old('aw_completed')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('aw_action') is-invalid @enderror" name="aw_action" value="{{ old('aw_action')}}" required >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>D. Environmental</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        13. Waste Management
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('wm_intervention') is-invalid @enderror" name="wm_intervention" value="{{ old('wm_intervention')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('wm_comment') is-invalid @enderror" name="wm_comment" value="{{ old('wm_comment')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('wm_completed') is-invalid @enderror" name="wm_completed" value="{{ old('wm_completed')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('wm_action') is-invalid @enderror" name="wm_action" value="{{ old('wm_action')}}" required >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        14. Product Contamination
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('pc_intervention') is-invalid @enderror" name="pc_intervention" value="{{ old('pc_intervention')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('pc_comment') is-invalid @enderror" name="pc_comment" value="{{ old('pc_comment')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('pc_completed') is-invalid @enderror" name="pc_completed" value="{{ old('pc_completed')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('pc_action') is-invalid @enderror" name="pc_action" value="{{ old('pc_action')}}" required >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        15. COSHH and Asbestos
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('ca_intervention') is-invalid @enderror" name="ca_intervention" value="{{ old('ca_intervention')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('ca_comment') is-invalid @enderror" name="ca_comment" value="{{ old('ca_comment')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('ca_completed') is-invalid @enderror" name="ca_completed" value="{{ old('ca_completed')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('ca_action') is-invalid @enderror" name="ca_action" value="{{ old('ca_action')}}" required >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>E. Protection of Individuals</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        16. PPE
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('pp_intervention') is-invalid @enderror" name="pp_intervention" value="{{ old('pp_intervention')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('pp_comment') is-invalid @enderror" name="pp_comment" value="{{ old('pp_comment')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('pp_completed') is-invalid @enderror" name="pp_completed" value="{{ old('pp_completed')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('pp_action') is-invalid @enderror" name="pp_action" value="{{ old('pp_action')}}" required >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        17. Manual Handling
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('mh_intervention') is-invalid @enderror" name="mh_intervention" value="{{ old('mh_intervention')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('mh_comment') is-invalid @enderror" name="mh_comment" value="{{ old('mh_comment')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('mh_completed') is-invalid @enderror" name="mh_completed" value="{{ old('mh_completed')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('mh_action') is-invalid @enderror" name="mh_action" value="{{ old('mh_action')}}" required >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        18. Other Contractors
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('oc_intervention') is-invalid @enderror" name="oc_intervention" value="{{ old('oc_intervention')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('oc_comment') is-invalid @enderror" name="oc_comment" value="{{ old('oc_comment')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('oc_completed') is-invalid @enderror" name="oc_completed" value="{{ old('oc_completed')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('oc_action') is-invalid @enderror" name="oc_action" value="{{ old('oc_action')}}" required >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>F. Tools, Cables and Other Equipment</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        19. Power Tools, Cables and Other Equipment
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('pt_intervention') is-invalid @enderror" name="pt_intervention" value="{{ old('pt_intervention')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('pt_comment') is-invalid @enderror" name="pt_comment" value="{{ old('pt_comment')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('pt_completed') is-invalid @enderror" name="pt_completed" value="{{ old('pt_completed')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('pt_action') is-invalid @enderror" name="pt_action" value="{{ old('pt_action')}}" required >
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        20. Voltage Detector Checked
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('vd_intervention') is-invalid @enderror" name="vd_intervention" value="{{ old('vd_intervention')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('vd_comment') is-invalid @enderror" name="vd_comment" value="{{ old('vd_comment')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('vd_completed') is-invalid @enderror" name="vd_completed" value="{{ old('vd_completed')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('vd_action') is-invalid @enderror" name="vd_action" value="{{ old('vd_action')}}" required >
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        21. Tools Used for fit purpose
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('tu_intervention') is-invalid @enderror" name="tu_intervention" value="{{ old('tu_intervention')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('tu_completed') is-invalid @enderror" name="tu_completed" value="{{ old('tu_completed')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('tu_comment') is-invalid @enderror" name="tu_comment" value="{{ old('tu_comment')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('tu_action') is-invalid @enderror" name="tu_action" value="{{ old('tu_action')}}" required >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>G. Miscellaneous</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        22. Vehicle Condition
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('vc_intervention') is-invalid @enderror" name="vc_intervention" value="{{ old('vc_intervention')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('vc_comment') is-invalid @enderror" name="vc_comment" value="{{ old('vc_comment')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('vc_completed') is-invalid @enderror" name="vc_completed" value="{{ old('vc_completed')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('vc_action') is-invalid @enderror" name="vc_action" value="{{ old('vc_action')}}" required >
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        23. Vehicle Log Sheet Up to Date
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('vl_intervention') is-invalid @enderror" name="vl_intervention" value="{{ old('vl_intervention')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('vl_comment') is-invalid @enderror" name="vl_comment" value="{{ old('vl_comment')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('vl_completed') is-invalid @enderror" name="vl_completed" value="{{ old('vl_completed')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('vl_action') is-invalid @enderror" name="vl_action" value="{{ old('vl_action')}}" required >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        24. Vehicle Service Records
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('vs_intervention') is-invalid @enderror" name="vs_intervention" value="{{ old('vs_intervention')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('vs_comment') is-invalid @enderror" name="vs_comment" value="{{ old('vs_comment')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('vs_completed') is-invalid @enderror" name="vs_completed" value="{{ old('vs_completed')}}" required >
                                    </td>
                                    <td>
                                        <input type="text"class="form-control @error('vs_action') is-invalid @enderror" name="vs_action" value="{{ old('vs_action')}}" required >
                                    </td>
                                </tr>

                            </tbody>


                        </table>
                        <div class="row">
                            <div class="col-md-6">
                            <table class="table table-bordered stripped">
                            <tr>
                                <td>
                                    <h4>Total Intervention By Section</h4>
                                </td>
                                <td>
                                    <h4>Totals</h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    A. Work Station
                                </td>
                                <td>
                                    <input type="text"class="form-control @error('tt_work_station') is-invalid @enderror" name="tt_work_station" value="{{ old('tt_quality')}}" required >
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    B. Quality
                                </td>
                                <td>
                                    <input type="text"class="form-control @error('tt_quality') is-invalid @enderror" name="tt_quality" value="{{ old('tt_quality')}}" required >
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    C. Site Rules
                                </td>
                                <td>
                                    <input type="text"class="form-control @error('tt_site_rules') is-invalid @enderror" name="tt_site_rules" value="{{ old('tt_site_rules')}}" required >
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    D. Environmental
                                </td>
                                <td>
                                    <input type="text"class="form-control @error('tt_environment') is-invalid @enderror" name="tt_environment" value="{{ old('tt_environment')}}" required >
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    E. Protection of Individuals
                                </td>
                                <td>
                                    <input type="text"class="form-control @error('tt_p_individuals') is-invalid @enderror" name="tt_p_individuals" value="{{ old('tt_p_individuals')}}" required >
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    F. Tools, Cables, and Other Equipment
                                </td>
                                <td>
                                    <input type="text"class="form-control @error('tt_tools') is-invalid @enderror" name="tt_tools" value="{{ old('tt_tools')}}" required >
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    G. Miscellaneous
                                </td>
                                <td>
                                    <input type="text"class="form-control @error('tt_miscellaneous') is-invalid @enderror" name="tt_miscellaneous" value="{{ old('tt_miscellaneous')}}" required >
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <h4>Overall</h4>
                                </td>
                                <td>
                                    <input type="text"class="form-control @error('tt_overal') is-invalid @enderror" name="tt_overal" value="{{ old('tt_overal')}}" required >
                                </td>

                            </tr>
                        </table>
                            </div>
                        </div>
                      
                        <div class="row mt-4">
                            <div class="col-md-6 offset-md-12 ">
                                <button type="submit" class="btn btn-block btn-primary">
                                    {{ __('Save Form') }}
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