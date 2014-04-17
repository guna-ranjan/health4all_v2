
	<section id="right">
		<h1>Welcome to Health4All!</h1>
		<p>
		<?php if($this->session->userdata('hospital')){
				$hospital=$this->session->userdata('hospital');
				echo "<div class='well'><b>Current Hospital set to</b> : $hospital[hospital], Place: $hospital[place], District: $hospital[district]</div>";
			}
			else{
				echo "Please select a hospital to continue.";
			}
		?>
		<p>
		<?php
		if(count($this->session->userdata('logged_in'))>1){
		echo form_open('home',array('role'=>'form','class'=>'form-custom')); ?>
		<label class="control-label"> Select Hospital - 
		<select name="organisation" class="form-control">
		<option value="--Select--" selected disabled >--Select--</option>
		<?php 
			$i=0;
			foreach($this->session->userdata('logged_in') as $row){
				echo "<option id='hospital_$i' value='$row[hospital_id]'>$row[hospital], $row[description], $row[place], $row[district]</option>";
			}
		?>
		<input class="btn btn-primary " type="submit" value="Submit" />
		</select>
		</form>
		<?php } ?>
		</p>
	</section>
