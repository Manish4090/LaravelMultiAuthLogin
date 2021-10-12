<?php
    
namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Admin;
use App\Models\Role;
use App\Models\Permission;
use App\Models\RolesPermissions;
use Illuminate\Support\Str;
    
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		
		 $permission = Permission::where('slug','role-edit')->first();
		 //dd(\Auth::guard('admin')->user()->hasRole('admin'));
        $roles = Role::orderBy('id','DESC')->paginate(5);
        return view('admin.roles.index',compact('roles'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission = Permission::get();
        return view('admin.roles.create',compact('permission'));
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
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);
		$slug = Str::slug($request->input('name'), '-');
		
        $role = Role::create(['name' => $request->input('name'),'slug'=>$slug]);
		Role::whereId($role->id)->first()->permissions()->attach([1,2]);
		/*$dev_role = new Role();
		$dev_role->slug = $slug;
		$dev_role->name = $request->input('name');
		$dev_role->save();
		$dev_role->slug;*/
		//$dev_permission = Permission::where('slug',$role['slug'])->first();
		//$role->permissions()->attach($dev_permission);
		
        return redirect()->route('admin.roles')
                        ->with('success','Role created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$permission = Permission::first();
        // $user->permissions()->attach($permission);
        // dd($user->permissions);
		
		//$role = Permission::where('slug','role-create')->first();
		//\Auth::guard('admin')->user()->hasPermissionTo($role);
		//dd(\Auth::guard('admin')->user()->hasPermissionTo($role));
		/*$dev_role = Role::where('slug','admin')->first();
		$createTasks = new Permission();
		$createTasks->slug = 'role-delete';
		$createTasks->name = 'Role Delete';
		$createTasks->save();
		$createTasks->roles()->attach($dev_role);*/
		
        $role = Role::where('id',$id)->with('permissions')->first();
        //dd($role);
        return view('admin.roles.show',compact('role'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::where('id',$id)->with(['permissions'])->first();
        $permissions = Permission::where('id',$id)->with('roles')->get();
        //dd($permissions);
		$rolePermissions =	Permission::pluck('name','name')->all();
    
        return view('admin.roles.edit',compact('role','permissions','rolePermissions'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);
		$data = $request->all();
		
        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->update();
		
		
			
		$role->permissions()->attach($data['permission']);
		
        //$role->syncPermissions($request->input('permission'));
    
        return redirect()->route('admin.roles')
                        ->with('success','Role updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("roles")->where('id',$id)->delete();
        return redirect()->route('admin.roles')
                        ->with('success','Role deleted successfully');
    }
}