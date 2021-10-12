<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <div class="container">
				   @if(session()->has('message'))
						<div class="alert alert-success">
							{{ session()->get('message') }}
						</div>
					@endif
					@if ($errors->any())
							 @foreach ($errors->all() as $error)
								 <div class="alert alert-success">{{$error}}</div>
							 @endforeach
						 @endif
						<!-- edit form column -->
						<div class="col-lg-12 text-lg-center">
							<h2>Add New Categories</h2>
							<br>
							<br>
						</div>
						<div class="col-lg-8 push-lg-4 personal-info">
						 <form action="{{ route('admin.store-categories') }}" method="POST" enctype="multipart/form-data">
							
							 {{csrf_field()}}
							 
							  <div class="form-group">
								
							  </div>
							  
								<div class="form-group row">
									<div class="col-lg-6">
									<label class=" form-control-label">Categories Name</label>
										<input class="form-control" type="text" name="cat_name" value="" />
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
									<label class=" form-control-label">Categories Image</label>
										<input class="form-control" type="file" name="cat_image" value="" />
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
									<label class=" form-control-label">Additional Description</label>
										<input class="form-control" type="textarea" name="additional_des" value="" />
									</div>
								</div>
								
								<div class="form-group row">
									<div class="col-lg-6">
									<label class=" form-control-label">Status</label>
										<select id="status" class="form-control" name="status">
										  <option value="Active">Active</option>
										  <option value="Inactive">Inactive</option>
										</select>
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label">Country</label>
									<div class="col-lg-9">
										<select name="parentid"  id="country-dd" class="form-control">
											<option value="" >Parent Categories</option>
											
											@foreach ($parrentCat as $datas)
											<option value="{{$datas->id}}" data-id="{{$datas->id}}">
												{{$datas->cat_name}}
											</option>
											@endforeach
										</select>
									</div>
								</div>
								
								
								
								
								
								<div class="form-group row">
									<label class="col-lg-3 col-form-label form-control-label"></label>
									<div class="col-lg-9">
										<input class="form-control" type="submit" value="Save" />
									</div>
								</div>
								
								
							</form>
						</div>
						
				</div>
				<hr />
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
