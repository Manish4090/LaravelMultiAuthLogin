<x-admin-layout>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Manage Shipping</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('admin.create-shipping') }}"> Create New Shipping</a>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-borderless" id="table1">
			<thead>
				<th>Sr. No.</th>
				<th>City</th>
				<th>Postal Code</th>
				<th>Sector</th>
				<th>Regular Delivery Rate</th>
				<th>Top 3 Store and Pickup Location</th>
				<th width="280px">Action</th>
			</thead>
			<tbody id="aaaaaaa">
			 @forelse ($shippingData as $key => $shippingData)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{ $shippingData->city }}</td>
					<td>{{ $shippingData->postal_code }}</td>
					<td>{{ $shippingData->sector }}</td>
					<td>{{ $shippingData->delivery_rate }}</td>
					<td>{{ $shippingData->pickup_location }}</td>
					<td>
						<a class="btn btn-primary" href="{{url('admin/edit-shipping')}}/{{ $shippingData->id }}">Edit</a>
						<a class="btn btn-danger" href="{{url('admin/delete-shipping')}}/{{ $shippingData->id }}">Delete</a>
					</td>
					
				</tr>
			@empty
			<td>No Records Found!!</td>
			@endforelse
			</tbody>
		</table>


</x-admin-layout>
	
