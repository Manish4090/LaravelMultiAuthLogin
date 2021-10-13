<x-admin-layout>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Manage Locations</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('admin.create-newlocations') }}"> Create New Locations</a>
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
				<th>Location Name</th>
				<th>Location Code</th>
				<th>Address</th>
				<th>Status</th>
				<th>Services Category</th>
				<th>Door/Divisions</th>
				<th width="280px">Action</th>
			</thead>
			<tbody id="aaaaaaa">
			 @forelse ($locatinsData as $key => $locatinsData)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{ $locatinsData->location_name }}</td>
					<td>{{ $locatinsData->location_code }}</td>
					<td>{{ $locatinsData->address }}</td>
					<td>{{ $locatinsData->status }}</td>
					<td>{{ $locatinsData->services_cat }}</td>
					<td>{{ $locatinsData->door_division }}</td>
					<td>
						<a class="btn btn-info" href="{{url('admin/show-locations')}}/{{ $locatinsData->id }}">Show</a>
						<a class="btn btn-primary" href="{{url('admin/edit-locations')}}/{{ $locatinsData->id }}">Edit</a>
						<a class="btn btn-danger" href="{{url('admin/delete-locations')}}/{{ $locatinsData->id }}">Delete</a>
					</td>
					
				</tr>
			@empty
			<td>No Records Found!!</td>
			@endforelse
			</tbody>
		</table>


</x-admin-layout>
	
