<?php

namespace App\Http\Controllers;

use App\Models\Reports;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('reports.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user()->id;
        $inspector = DB::table('users')->where('id', $user)->pluck('name');
        $date = Carbon::now();

        //dd($date->format("Y-M-D H:m")); //this will dump the date time in the desired format
        //dd($inspector);
        return view('reports.create', compact('inspector', 'date'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'site_name' => 'required',
            'work_area' => 'required',
            'supervisor' => 'required',
            'completed_by' => 'required',
            'job_description' => 'required',
            'inspector' => 'required',
            'date_inspected' => 'required',
            'type' => 'required',
            'wah_intervention' => 'required',
            'wah_comment' => 'required',
            'wah_completed' => 'required',
            'wah_action' => 'required',
            'lo_intervention' => 'required',
            'lo_comment' => 'required',
            'lo_completed' => 'required',
            'lo_action' => 'required',
            'cet_intervention' => 'required',
            'cet_comment' => 'required',
            'cet_completed' => 'required',
            'cet_action' => 'required',
            'con_intervention' => 'required',
            'con_comment' => 'required',
            'con_completed' => 'required',
            'con_action' => 'required',
            'el_intervention' => 'required',
            'el_comment' => 'required',
            'el_completed' => 'required',
            'el_action' => 'required',
            'st_intervention' => 'required',
            'st_comment' => 'required',
            'st_completed' => 'required',
            'st_action' => 'required',
            'pw_intervention' => 'required',
            'pw_comment' => 'required',
            'pw_completed' => 'required',
            'pw_action' => 'required',
            'ct_intervention' => 'required',
            'ct_comment' => 'required',
            'ct_completed' => 'required',
            'ct_action' => 'required',
            'sr_intervention' => 'required',
            'sr_comment' => 'required',
            'sr_completed' => 'required',
            'sr_action' => 'required',
            'iso_intervention' => 'required',
            'iso_comment' => 'required',
            'iso_completed' => 'required',
            'iso_action' => 'required',
            'fr_intervention' => 'required',
            'fr_comment' => 'required',
            'fr_completed' => 'required',
            'fr_action' => 'required',
            'aw_intervention' => 'required',
            'aw_comment' => 'required',
            'aw_completed' => 'required',
            'aw_action' => 'required',
            'wm_intervention' => 'required',
            'wm_comment' => 'required',
            'wm_completed' => 'required',
            'wm_action' => 'required',
            'pc_intervention' => 'required',
            'pc_comment' => 'required',
            'pc_completed' => 'required',
            'pc_action' => 'required',
            'ca_intervention' => 'required',
            'ca_comment' => 'required',
            'ca_completed' => 'required',
            'ca_action' => 'required',
            'pp_intervention' => 'required',
            'pp_comment' => 'required',
            'pp_completed' => 'required',
            'pp_action' => 'required',
            'mh_intervention' => 'required',
            'mh_comment' => 'required',
            'mh_completed' => 'required',
            'mh_action' => 'required',
            'oc_intervention' => 'required',
            'oc_comment' => 'required',
            'oc_completed' => 'required',
            'oc_action' => 'required',
            'pt_intervention' => 'required',
            'pt_comment' => 'required',
            'pt_completed' => 'required',
            'pt_action' => 'required',
            'vd_intervention' => 'required',
            'vd_comment' => 'required',
            'vd_completed' => 'required',
            'vd_action' => 'required',
            'tu_intervention' => 'required',
            'tu_comment' => 'required',
            'tu_completed' => 'required',
            'tu_action' => 'required',
            'vc_intervention' => 'required',
            'vc_comment' => 'required',
            'vc_completed' => 'required',
            'vc_action' => 'required',
            'vl_intervention' => 'required',
            'vs_comment' => 'required',
            'vs_completed' => 'required',
            'vs_action' => 'required',
            'tt_work_station' => 'required',
            'tt_quality' => 'required',
            'tt_site_rules' => 'required',
            'tt_environment' => 'required',
            'tt_p_individuals' => 'required',
            'tt_tools' => 'required',
            'tt_miscellaneous' => 'required',
            'tt_overal' => 'required',



        ]);

        $input = $request->all();

        $user = Reports::create($input);


        return redirect()->route('inspector.index')
            ->with('success', 'Inspector created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function show(Reports $reports)
    {
        return view('reports.show', compact('reports'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function edit(Reports $reports)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reports $reports)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reports  $reports
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reports $reports)
    {
        //
    }
}
