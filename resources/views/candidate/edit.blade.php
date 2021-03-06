@include('includes.header')
	<div class="container">
			<form class="form-horizontal" method="post" action="{{ url("account/$candidate->id") }}">
			{{ csrf_field() }}
			<input name="_method" type="hidden" value="PUT">
	  <fieldset>
	    <legend>Edit</legend>
	    @if(count($errors) > 0 )
	    	@foreach($errors->all() as $error)
	    		<div class="col-md-8 alert alert-danger">{{$error}}</div>
	    	@endforeach
	    @endif

	    @if(session('response'))
	    	<div class="col-md-8 alert alert-success">
	    		{{session('response')}}
	    	</div>
	    @endif

	    <div class="form-group">
	      <label for="inputName" class="col-lg-2 control-label">Name</label>
	      <div class="col-lg-6">
	        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name" value="{{ isset($candidate->name) ? $candidate->name : old('name') }}">
	      </div>
	    </div>

	    <div class="form-group">
	      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
	      <div class="col-lg-10">
	        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email" value="{{ isset($candidate->email) ? $candidate->email : old('email') }}">
	      </div>
	    </div>

	    <div class="form-group">
	      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
	      <div class="col-lg-6">
	        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" value="{{ isset($candidate->password) ? $candidate->password : old('password') }}">
	      </div>
	    </div>

		<div class="form-group">
			      <label for="inputPassword" class="col-lg-2 control-label">Date of Birth</label>
			      <div class="col-lg-6">
			        <input type="password" name="dob" class="form-control" id="datepicker" placeholder="mm/dd/yy" value="{{ isset($candidate->dob) ? $candidate->dob : old('dob') }}">
		  </div>
	    </div>

	    <div class="form-group">
	      <label class="col-lg-2 control-label">Gender</label>
	      <div class="col-lg-10">
	        <div class="radio">
	          <label>
	            <input type="radio" name="gender" id="optionsRadios1" value="Male" checked="">
	            Male
	          </label>
	        </div>
	        <div class="radio">
	          <label>
	            <input type="radio" name="gender" id="optionsRadios2" value="Female">
	            Female
	          </label>
	        </div>
	      </div>
	    </div>
	    
	    <div class="form-group">
	      <label for="select" class="col-lg-2 control-label">Country</label>
	      <div class="col-lg-10">
	        <select class="form-control" name="country" id="select" value="{{ isset($candidate->country) ? $candidate->country : old('country') }}">
	          <option>Philippines</option>
	          <option>Australia</option>
	          <option>Singapore</option>
	          <option>Japan</option>
	          <option>Korea</option>
	        </select>
	      </div>
	    </div>

	    <div class="form-group">
	      <label for="inputName" class="col-lg-2 control-label">Mobile</label>
	      <div class="col-lg-6">
	        <input type="text" name="mobile" class="form-control" id="inputName" placeholder="Mobile" value="{{ isset($candidate->mobile) ? $candidate->mobile : old('mobile') }}">
	      </div>
	    </div>

	    <div class="form-group">
	      <label for="textArea" class="col-lg-2 control-label">Address</label>
	      <div class="col-lg-6">
	        <textarea class="form-control" name="address" rows="3" id="textArea" value="">{{ isset($candidate->address) ? $candidate->address : old('address') }}</textarea>
	      </div>
	    </div>

	    <div class="form-group">
	      <div class="col-lg-10 col-lg-offset-2">
	      	<button type="submit" class="btn btn-primary">Submit</button>
	        <button type="reset" class="btn btn-default">Cancel</button>        
	      </div>
	    </div>
	  </fieldset>
	</form>
	</div>

@include('includes.footer')

