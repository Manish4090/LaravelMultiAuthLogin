<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ManageLocation;

class ManageLocationsController extends Controller
{
    public function managelocation (Request $request){
		$locatinsData = ManageLocation::all();
		return view('admin.managelocation.index',compact('locatinsData'));
	}
	public function createnewlocations (Request $request){
		return view('admin.managelocation.create');
	}
	public function storelocations(Request $request){
		 $this->validate($request, [
            'location_name' => 'required',
            'location_code' => 'required',
            'address' => 'required',
            'status' => 'required',
            'services_cat' => 'required',
            'door_division' => 'required',
        ]);
		$data = $request->all();
		$storeData = array(
			'location_name' => $data['location_name'],
            'location_code' => $data['location_code'],
            'address' => $data['address'],
            'status' => $data['status'],
            'services_cat' => $data['services_cat'],
            'door_division' => $data['door_division'],
		);
		ManageLocation::create($storeData);
		return redirect()->route('admin.managelocation')
                        ->with('success','Locations created successfully');
	}
	
	public function editlocations(Request $request,$id){
		$locationinfo = ManageLocation::find($id);
		return view('admin.managelocation.edit',compact('locationinfo'));
	}
	
	
	public function updatelocations(Request $request,$id){
		$this->validate($request, [
            'location_name' => 'required',
            'location_code' => 'required',
            'address' => 'required',
            'status' => 'required',
            'services_cat' => 'required',
            'door_division' => 'required',
        ]);
		$data = $request->all();
		$storeData = array(
			'location_name' => $data['location_name'],
            'location_code' => $data['location_code'],
            'address' => $data['address'],
            'status' => $data['status'],
            'services_cat' => $data['services_cat'],
            'door_division' => $data['door_division'],
		);
		$locationinfo = ManageLocation::where('id',$id)->update($storeData);
		return redirect()->route('admin.managelocation')
                        ->with('success','Locations Info Updated successfully');
		
	}
	
	public function showlocations(Request $request,$id){
		$locationinfo = ManageLocation::find($id);
		return view('admin.managelocation.show',compact('locationinfo'));
	}
	
	public function deletelocations(Request $request,$id){
		ManageLocation::where('id',$id)->delete();
        return redirect()->route('admin.managelocation')
                        ->with('success','Location deleted successfully');
	}
	
	
}
