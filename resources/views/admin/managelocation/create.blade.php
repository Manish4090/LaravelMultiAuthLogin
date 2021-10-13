<x-admin-layout>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Locations</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin.managelocation') }}"> Back</a>
        </div>
    </div>
</div>


@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif


{!! Form::open(array('route' => 'admin.store-locations','method'=>'POST')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Locations Name <label>*</label> :</strong>
            {!! Form::text('location_name', null, array('placeholder' => 'Locations Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Location Code <label>*</label> :</strong>
            <br/>
            {!! Form::text('location_code', null, array('placeholder' => 'Locations Code','class' => 'form-control')) !!}
        </div>
    </div>
	<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Address <label>*</label> :</strong>
            {!! Form::textarea('address', null, array('placeholder' => 'Address','class' => 'form-control')) !!}
        </div>
    </div>
	<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>status <label>*</label> :</strong>
            <select id="status" name="status" class="form-control">
				<option value="">--Select--</option>
				<option value="onsale">On Sale</option>
				<option value="offsale">Off Sale</option>
			  </select>
        </div>
    </div>
	<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Services Category <label>*</label> :</strong>
            <select id="services_cat" name="services_cat" class="form-control">
				<option value="">--Select--</option>
				<option value="warehouse">Warehouse</option>
				<option value="quick_pickup">Quick Pickup</option>
				<option value="public">Public</option>
				<option value="private">Private</option>
				<option value="planed_pickup">Planed Pickup</option>
			  </select>
        </div>
    </div>
	<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Door/Division <label>*</label> :</strong>
            <br/>
            {!! Form::text('door_division', null, array('placeholder' => 'Locations Code','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}
</x-admin-layout>