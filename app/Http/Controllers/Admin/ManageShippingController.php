<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ManageShipping;

class ManageShippingController extends Controller
{
    public function index(Request $request){
		$shippingData = ManageShipping::all();
		return view('admin.manageshipping.index',compact('shippingData'));
	}
	
	public function createshipping(Request $request){
		return view('admin.manageshipping.create');
	}
	
	public function storeshipping(Request $request){
		 $this->validate($request, [
            'city' => 'required',
            'postal_code' => 'required',
            'sector' => 'required',
            'delivery_rate' => 'required',
            'pickup_location' => 'required',
        ]);
		$data = $request->all();
		$storeData = array(
			'city' => $data['city'],
            'postal_code' => $data['postal_code'],
            'sector' => $data['sector'],
            'delivery_rate' => $data['delivery_rate'],
            'pickup_location' => $data['pickup_location'],
		);
		ManageShipping::create($storeData);
		return redirect()->route('admin.manageshipping')
                        ->with('success','Shipping created successfully');
	}
	
	public function editshipping(Request $request, $id){
		$shippingData = ManageShipping::find($id);
		return view('admin.manageshipping.edit',compact('shippingData'));
	}
	
	public function updateshipping(Request $request,$id){
		 $this->validate($request, [
            'city' => 'required',
            'postal_code' => 'required',
            'sector' => 'required',
            'delivery_rate' => 'required',
            'pickup_location' => 'required',
        ]);
		$data = $request->all();
		$storeData = array(
			'city' => $data['city'],
            'postal_code' => $data['postal_code'],
            'sector' => $data['sector'],
            'delivery_rate' => $data['delivery_rate'],
            'pickup_location' => $data['pickup_location'],
		);
		ManageShipping::where('id',$id)->update($storeData);
		return redirect()->route('admin.manageshipping')
                        ->with('success','Shipping Updated successfully');
	}
	
	public function deleteshipping(Request $request,$id){
		ManageShipping::where('id',$id)->delete();
        return redirect()->route('admin.manageshipping')
                        ->with('success','Shipping deleted successfully');
	}
}
