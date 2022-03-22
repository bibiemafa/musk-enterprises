<?php

namespace App\Http\Controllers;

use App\Models\Inspector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use PDF;

class InspectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $user = Auth::user()->name;
       $clients = DB::table('reports')->where('inspector',$user)->get();
       $all_clients = DB::table('users')->where('role','client')->get();
       //dd($clients);
        return view('inspector.index', compact('clients', 'all_clients'));
    }

    function pdf(){
  
        $user = Auth::user()->name;
        $clients = DB::table('reports')->where('inspector',$user)->get();
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user()->name;
        return view('inspector.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'inspector_name' => 'required',
            'task_assigned' => 'required',
            'supervisor' => 'required',
        ]);

        $input = $request->all();

        $user = Inspector::create($input);


        return redirect()->route('supervisor.index')
            ->with('success', 'Inspector assigned  successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inspector  $inspector
     * @return \Illuminate\Http\Response
     */
    public function show(Inspector $inspector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inspector  $inspector
     * @return \Illuminate\Http\Response
     */
    public function edit(Inspector $inspector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inspector  $inspector
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inspector $inspector)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inspector  $inspector
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inspector $inspector)
    {
        //
    }
}
