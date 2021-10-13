<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h2>Show User Info</h2>
        </h2>
    </x-slot>
	
	<x-slot name="header">
      <a class="btn btn-primary" href="{{ route('admin.customer') }}">Back</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   							
							<div class="col-lg-8 push-lg-4 personal-info">
							
							 <input type="hidden" name="userId" value="{{ $userDetail['id'] }}">
								<div class="form-group row">
									<strong class="col-lg-3 col-form-strong form-control-strong">Name : </strong>
									<div class="col-lg-9">
										<input class="form-control" type="text" name="name" value="{{ $userDetail['name'] }}" readonly>
									</div>
								</div>
								<div class="form-group row">
									<strong class="col-lg-3 col-form-strong form-control-strong">Email : </strong>
									<div class="col-lg-9">
										<input class="form-control" name="email" type="email" value="{{ $userDetail['email'] }}" readonly>
									</div>
								</div>
								<div class="form-group row">
									<strong class="col-lg-3 col-form-strong form-control-strong">Phone : </strong>
									<div class="col-lg-9">
										<input class="form-control" name="phone" type="phone" value="{{ $userDetail['phone'] }}" readonly>
									</div>
								</div>
								
								<div class="form-group row">
									<strong class="col-lg-3 col-form-strong form-control-strong">Country : </strong>
									<div class="col-lg-9">
										<input class="form-control" name="country" type="text" value="{{ @$userDetail['country'] }}" readonly>
									</div>
								</div>
								
								<div class="form-group row">
									<strong class="col-lg-3 col-form-strong form-control-strong">State : </strong>
									<div class="col-lg-9">
										<input class="form-control" name="state" type="text" value="{{ @$userDetail['state'] }}" readonly>
									</div>
								</div>
								<div class="form-group row">
									<strong class="col-lg-3 col-form-strong form-control-strong">City : </strong>
									<div class="col-lg-9">
										<input class="form-control" name="city" type="text" value="{{ @$userDetail['city'] }}" readonly>
									</div>
								</div>
								<div class="form-group row">
									<strong class="col-lg-3 col-form-strong form-control-strong">Zip Code : </strong>
									<div class="col-lg-9">
										<input class="form-control" name="zipcode" type="text" value="{{ @$userDetail['zipcode'] }}" readonly>
									</div>
								</div>
								<div class="form-group row">
									<strong class="col-lg-3 col-form-strong form-control-strong">Full Address : </strong>
									<div class="col-lg-9">
										<textarea class="form-control" id="address" name="address" value="fasdflk" rows="4" cols="50" readonly>{{ @$userDetail['address'] }}
										</textarea>
									</div>
								</div>
								
						</div>
						  
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>