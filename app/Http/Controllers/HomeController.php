<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
<<<<<<< HEAD
       // Role::create(['name'=>'inspector']);

=======

        // Role::create(['name'=>'supervisor']);

        //Role::create(['name'=>'inspector']);
 
>>>>>>> d2aa1322f3fb021367f3671b0613a91f7c8b08db
        return view('home');
    }
}
