<x-admin-layout>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Shipping</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin.manageshipping') }}"> Back</a>
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


{!! Form::model($shippingData, ['method' => 'PATCH','url' => ['admin/update-shipping',$shippingData->id ]]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>City <label>*</label> :</strong>
            {!! Form::text('city', null, array('placeholder' => 'City','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Postal Code <label>*</label> :</strong>
            <br/>
            {!! Form::text('postal_code', null, array('placeholder' => 'Postal Code','class' => 'form-control')) !!}
        </div>
    </div>
	<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Sector <label>*</label> :</strong>
            {!! Form::text('delivery_rate', null, array('placeholder' => 'Sector','class' => 'form-control')) !!}
        </div>
    </div>
	<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Delivery Rate <label>*</label> :</strong>
            {!! Form::text('sector', null, array('placeholder' => 'Delivery Rate','class' => 'form-control')) !!}
        </div>
    </div>
	<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Pickup Location <label>*</label> :</strong>
            {!! Form::text('pickup_location', null, array('placeholder' => 'Pickup Location','class' => 'form-control')) !!}
        </div>
    </div>
	
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}


</x-admin-layout>