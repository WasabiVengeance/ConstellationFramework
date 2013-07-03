<form action="/Registration/Process" name="regForm" onsubmit="return jvc.submitForm(this);">
	
	<div class="btn-group" data-toggle="buttons-radio">
		<label class="btn btn-success">
			<input type="radio" name="badge_type" value="3day"> 3 Day
		</label>
		<label class="btn btn-info">
			<input type="radio" name="badge_type" value="friday-only"> Friday
		</label>
		<label class="btn btn-info">
			<input type="radio" name="badge_type" value="saturday-only"> Saturday
		</label>
		<label class="btn btn-info">
			<input type="radio" name="badge_type" value="sunday-only"> Sunday
		</label>
		<label class="btn btn-warning">
			<input type="radio" name="badge_type" value="comp"> Comp
		</label>
		<div class="bsc-form-error-msg"></div>
	</div>
	<br />&nbsp;<br />
	<div class="control-group">
		<label class="control-label" for="full_name">Attendee Name</label>
		<div class="controls">
			<input type="text" class="input-with-feedback input-large" id="name" />
		</div>
		<div class="bsc-form-error-msg"></div>
	</div>
	<div class="control-group">
		<label class="control-label" for="street_address">Street Address</label>
		<div class="controls">
			<input type="text" class="input-with-feedback input-large" id="street_address" />
		</div>
		<div class="bsc-form-error-msg"></div>
	</div>
	<div class="control-group">
		<label class="control-label" for="city">City</label>
		<div class="controls">
			<input type="text" class="input-with-feedback input-large" id="city" />
		</div>
		<div class="bsc-form-error-msg"></div>
	</div>
	<div class="control-group">
		<label class="control-label" for="state_province">State</label>
		<div class="controls">
			<input type="text" class="input-with-feedback input-large" id="state_province" />
		</div>
		<div class="bsc-form-error-msg"></div>
	</div>
	<div class="control-group">
		<label class="control-label" for="postal_code">Zip Code</label>
		<div class="controls">
			<input type="text" class="input-with-feedback input-large" id="postal_code" />
		</div>
		<div class="bsc-form-error-msg"></div>
	</div>
	<div class="control-group">
		<label class="control-label" for="dob1">Date of Birth</label>
		<div class="controls form-inline">
			<input type="text" class="input-with-feedback input-large" id="dob1" placeholder="Month" style="width:100px;" /> / 
			<input type="text" class="input-with-feedback input-large" id="dob2" placeholder="Day" style="width:100px;" /> / 
			<input type="text" class="input-with-feedback input-large" id="dob3" placeholder="Year" style="width:100px;" />
		</div>
		<div class="bsc-form-error-msg"></div>
	</div>
	<div class="control-group">
		<label class="control-label" for="contact_phone_nbr">Contact Phone Number</label>
		<div class="controls">
			<input type="text" class="input-with-feedback input-large" id="contact_phone_nbr" />
		</div>
		<div class="bsc-form-error-msg"></div>
	</div>
	<div class="action_buttons">
		<button class="btn btn-danger  btn-large" type="reset"><i class="icon-repeat"></i> Reset</button>
		<button class="btn btn-primary btn-large"><i class="icon-save"></i> Save</button>
	</div>
</form>

<?php
jvc::set_response('js',$this->Rules()->js('regForm'));
jvc::set_response('center');
?>