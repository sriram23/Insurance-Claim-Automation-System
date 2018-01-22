<?php
$name = $_POST['UserName-edit'];
$pwd = $_POST['Password-edit'];
	echo "<html>";
	echo "<head>";
	echo "<title>Insurance - Application</title>
	<!-- Angular -->
	<script src=https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js></script>
	<!-- Bootstrap CSS -->
	<link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css integrity=sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u crossorigin=anonymous>
	<!-- Bootstrap Optional Theme - CSS -->
	<link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css integrity=sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp crossorigin=anonymous>
	<!--Isolated Bootstrap-->
	<!--<link rel=stylesheet href=https://formden.com/static/cdn/bootstrap-iso.css />-->
	<!-- Bootstrap - JS -->
	<script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js integrity=sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa crossorigin=anonymous></script>
	<!--DATE PICKER-->
	<!--<script>
    $(document).ready(function(){
      var date_input=$('input[name=date]'); //our date input has the name date
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : body;
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
	</script>-->
	";
	echo "</head>";
	echo "<body>";

if($name == "user" && $pwd == 123){
	echo "<form action=Entry.php method=post>
	<div class=container>
		<div class=row>
			<div class=col-md-12>
				<h1>Motor Insurance Claim Form</h1>
			</div>
		</div>
		<div class=row>
			<div class=col-md-6><label>Policy Number</label><input type=text class=form-control name=PolicyNumber>
			</div>
			<div class=col-md-6><label>Vehicle Number</label><input type=text class=form-control name=VehicleNumber>
			</div>
		</div>
		<div class=panel panel-default>
    		<div class=panel-heading style=background-color:#1f9999><label>Insured Details</label></div>
    		<div class=panel-body>
    			<div class=row>
    				<div class=col-md-12>
    					<label>Name</label>
    					<input type=text class=form-control name=Name>
    				</div>
    			</div>
    			<div class=row>
    				<div class=col-md-12>
    					<label>Address</label>
    					<textarea class=form-control rows=5 name=Address></textarea>
    				</div>
    			</div>
    			<div class=row>
    				<div class=col-md-6>
    					<label>City</label>
    					<input type=text class=form-control name=City>
    				</div>
    				<div class=col-md-6>
    					<label>Pin</label>
    					<input type=text class=form-control name=Pin>
    				</div>
    			</div>
    			<div class=row>
    				<div class=col-md-6>
    					<label>Mobile</label>
    					<input type=text class=form-control name=Mobile>
    				</div>
    				<div class=col-md-6>
    					<label>Landline</label>
    					<input type=text class=form-control name=Landline>
    				</div>
    			</div>
    			<div class=row>
    				<div class=col-md-12>
    					<label>Email Id</label>
    					<input type=text class=form-control name=Email>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class=panel panel-default>
    		<div class=panel-heading style=background-color:#1f9999><label>Loss Details</label></div>
    		<div class=panel-body>
    			<div class=row>
    				<div class=col-md-6>
    					<label>Date</label>
    					<input type=text value='MM/DD/YYYY' class=form-control name=date>
    				</div>
    			</div>
    			<div class=row>
    				<div class=col-md-12>
    					<label>Place of Accident</label>
    					<input type=text class=form-control name=PlaceOfAccident>
    				</div>
    			</div>
    			<div class=row>
    				<div class=col-md-3>
    					<label>Type of Loss</label>
    				</div>
    				<div class=col-md-3>
    					<label class=checkbox-inline><input type=checkbox value='Own Damage' name=TypeOfLoss[]>Own Damage</label>
    				</div>
    				<div class=col-md-3>
	  					<label class=checkbox-inline><input type=checkbox value=Theft name=TypeOfLoss[]>Theft</label>
	  				</div>
	  				<div class=col-md-3>
						<label class=checkbox-inline><input type=checkbox value=Third Party name=TypeOfLoss[]>*Third Party</label>
					</div>
				</div>
				<div class=row>
					<div class=col-md-12>
						<label>Short Description of Accident</label>
						<textarea class=form-control rows=5 name=Description></textarea>
					</div>
				</div>
				<div class=row>
					<div class=col-md-12>
						Policy Reports if any
					</div>
				</div>
    		</div>
    	</div>
    	<div class=panel panel-default>
    		<div class=panel-heading style=background-color:#1f9999><label>Driver details at the time of accident</label></div>
    		<div class=panel-body>
    			<div class=row>
    				<div class=col-md-6>
    					<label>Name</label>
    					<input type=text class=form-control name=DName>
    				</div>
    				<div class=col-md-6>
    					<label>Age</label>
    					<input type=text class=form-control name=DAge>
    				</div>
    			</div>
                <div class=row>
                    <div class=col-md-6>
                        <label>Driving License No</label>
                        <input type=text class=form-control name=LicenseNo>
                    </div>
                    <div class=col-md-6>
                        <label>Name of RTO</label>
                        <input type=text class=form-control name=RTO>
                    </div>
                </div>
                <div class=row>
                    <div class=col-md-4>
                        <label>Learners License</label>
                    </div>
                    <div class=col-md-4>
                        <label class=checkbox-inline><input type=checkbox value=YES name=LL[]>Yes</label>
                    </div>
                    <div class=col-md-4>
                        <label class=checkbox-inline><input type=checkbox value=NO name=LL[]>No</label>
                    </div>
                </div>
                <div class=row>
                    <div class=col-md-12>
                        <label>Co passenger details</label>
                        <input type=text class=form-control name=CoPassenger>
                    </div>
                </div>
    		</div>
    	</div>
        <div class=panel panel-default>
            <div class=panel-heading><label>Declaration</label></div>
            <div class=panel-body>
                <div class=row>
                    <div class=col-md-12>
                        <p>I/We hereby declare that the details given above are correct to the best of my belief and knowledge. In the event above information or any part thereof is found incorrect, I agree that all right under the policy will be forfeited.</p>
                    </div>
                </div>
            </div>
        </div>
	<div class=row>
        <div class=col-md-3 col-sm-3></div>
		<div class=col-md-3 col-sm-3>
			<input type=submit value=Store class='btn btn-primary'>
		</div>
        </form>
        <div class=col-md-3 col-sm-3></div>
        <div class=col-md-3 col-sm-3>
            <form action=fetch.php method=post>
                <input type=submit value=Fetch class='btn btn-success'>
            </form>
        </div>
	</div>";
}	
	echo "</body>";
	echo "</html>";
?>