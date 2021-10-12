<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;
use App\Traits\HasPermissionsTrait;

class HomeController extends Controller
{
	
	function __construct()
    {
        
    }
	
    public function index(Request $request)
    {
		// dd(\Auth::guard('admin')->user()->hasRole('editor'));
		$role = Permission::where('slug','delete-post')->first();
		//dd(\Auth::guard('admin')->user()->hasPermissionTo($role));
	   
        return view('admin.dashboard');
    }
	
	public function addpost(){
		 //dd(\Request::segment(2));
		 $permission = Permission::where('slug',\Request::segment(2))->first();
		 if(\Auth::guard('admin')->user()->hasPermissionTo($permission)){
			return "yes you can"; 
		 } else {
			 return "you can not access this page";
		 }
		return view('admin.dashboard');
	}
}
