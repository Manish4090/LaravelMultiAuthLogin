<x-admin-layout>
<div class="container">   
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Users Management</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ url('admin/create-users') }}"> Create New User</a>
        </div>
    </div>
</div>

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

<table class="table table-borderless" id="table1">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Email</th>
					<th>Roles</th>
					<th width="280px">Action</th>
				</tr>
			</thead>
			<tbody id="aaaaaaa">
			@forelse($data as $key => $user)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>
					@foreach($user->roles as $roles)
						   {{ $roles['name'] }}
					@endforeach
					  
					</td>
					<td>
					   <a class="btn btn-info" href="{{ url('admin/usersmanagement',$user->id) }}">Show</a>
					   <a class="btn btn-primary" href="{{ url('admin/edit-users-management',$user->id) }}">Edit</a>
						{!! Form::open(['method' => 'POST','url' => ['admin/delete-users-management', $user->id],'style'=>'display:inline']) !!}
							{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
						{!! Form::close() !!}
					</td>
				  </tr>
			@empty
			<td>No Records Found!!</td>
			@endforelse
				</tbody>
		</table>


</div>
   
</x-admin-layout>
   
