<x-admin-layout>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Role Management</h2>
        </div>
        <div class="pull-right">
        @permission('role-create')
            <a class="btn btn-success" href="{{ route('admin.create-roles') }}"> Create New Role</a>
            @endpermission
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
				<th>No</th>
				<th>Name</th>
				<th width="280px">Action</th>
			</thead>
			<tbody id="aaaaaaa">
			 @forelse ($roles as $key => $role)
				<tr>
					<td>{{ ++$i }}</td>
					<td>{{ $role->name }}</td>
					<td>
						<a class="btn btn-info" href="{{ url('admin/show-roles',$role->id) }}">Show</a>
						@permission('role-edit')
							<a class="btn btn-primary" href="{{ url('admin/edit-roles',$role->id) }}">Edit</a>
						@endpermission
						@permission('role-delete')
							{!! Form::open(['method' => 'DELETE','url' => ['admin/destroy-roles', $role->id],'style'=>'display:inline']) !!}
								{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
							{!! Form::close() !!}
						@endpermission
					</td>
				</tr>
			@empty
			<td>No Records Found!!</td>
			@endforelse
			</tbody>
		</table>


</x-admin-layout>
	
