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
        // Role::create(['name'=>'supervisor']);
=======
        //Role::create(['name'=>'inspector']);
>>>>>>> 56abdc56ad8af66585c1b17a53ca7be705309a92
        return view('home');
    }
}
