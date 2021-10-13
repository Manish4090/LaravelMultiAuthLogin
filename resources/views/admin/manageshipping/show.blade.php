<x-admin-layout>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Location</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin.managelocation') }}"> Back</a>
        </div>
    </div>
</div>


{!! Form::model($locationinfo) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Locations Name <label>*</label> :</strong>
            {!! Form::text('location_name', null, array('placeholder' => 'Locations Name','class' => 'form-control','readonly')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Location Code <label>*</label> :</strong>
            <br/>
            {!! Form::text('location_code', null, array('placeholder' => 'Locations Code','class' => 'form-control','readonly')) !!}
        </div>
    </div>
	<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Address <label>*</label> :</strong>
            {!! Form::textarea('address', null, array('placeholder' => 'Address','class' => 'form-control','readonly')) !!}
        </div>
    </div>
	<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>status <label>*</label> :</strong>
			  {!! Form::text('status', null, array('placeholder' => 'Locations Code','class' => 'form-control','readonly')) !!}
        </div>
    </div>
	<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Services Category <label>*</label> :</strong>
			{!! Form::text('services_cat', null, array('placeholder' => 'Locations Code','class' => 'form-control','readonly')) !!}  
        </div>
    </div>
	<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Door/Division <label>*</label> :</strong>
            <br/>
            {!! Form::text('door_division', null, array('placeholder' => 'Locations Code','class' => 'form-control','readonly')) !!}
        </div>
    </div>
</div>
{!! Form::close() !!}
</x-admin-layout>