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
	<!-- Bootstrap - JS -->
	<script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js integrity=sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa crossorigin=anonymous></script>";
	echo "</head>";
	echo "<body>";

if($name == "user" && $pwd == 123){
	echo "Hello ".$name."!";	
	echo "<form action=Entry.php method=post>
	<div class=row><div class=col-md-3 col-sm-3></div>
		<div class=col-md-6 col-sm-6>
				<label>Insurance ID</label>
				<input type=text class=form-control id=Iid name=Iid>
		</div>
	</div>
	<div class=row><div class=col-md-3 col-sm-3></div>
		<div class=col-md-6 col-sm-6>
				<label>Contact Number</label>
				<input type=text class=form-control id=pno name=pno>
		</div>
	</div>
	<div class=row><div class=col-md-3 col-sm-3></div>
		<div class=col-md-6 col-sm-6>
				<label>Name (Insured Person)</label>
				<input type=text class=form-control id=name name=name>
		</div>
	</div>
	<div class=row><div class=col-md-3 col-sm-3></div>
		<div class=col-md-6 col-sm-6>
				<label>Date/Time</label>
				<input type=text class=form-control id=date name=date value='YYYY-MM-DD HH:MM:SS'>
		</div>
	</div>
	<div class=row><div class=col-md-3 col-sm-3></div>
		<div class=col-md-6 col-sm-6>
				<label>Vehicle Number</label>
				<input type=text class=form-control id=vNo name=vNo>
		</div>
	</div>
	<div class=row><div class=col-md-3 col-sm-3></div>
		<div class=col-md-6 col-sm-6>
				<label>Make / Model</label>
				<input type=text class=form-control id=make name=make>
		</div>
	</div>
	<div class=row><div class=col-md-3 col-sm-3></div>
		<div class=col-md-6 col-sm-6>
				<label>Location</label>
				<input type=text class=form-control id=location name=location>
		</div>
	</div>
	<div class=row><div class=col-md-3 col-sm-3></div>
		<div class=col-md-6 col-sm-6>
				<label>Extent of loss</label>
				<input type=text class=form-control id=extent name=extent>
		</div>
	</div>
	<div class=row><div class=col-md-3 col-sm-3></div>
		<div class=col-md-6 col-sm-6>
				<label>Description</label>
				<input type=text class=form-control id=desc name=desc>
		</div>
	</div>
	<div class=row><div class=col-md-3 col-sm-3></div>
		<div class=col-md-6 col-sm-6>
				<label>Garage Name</label>
				<input type=text class=form-control id=Gname name=Gname>
		</div>
	</div>
	<div class=row><div class=col-md-3 col-sm-3></div>
		<div class=col-md-6 col-sm-6>
			<input type=submit value=Store class='btn btn-primary'>
		</div>
	</div>
	</form>";

	echo "<div class=row><div class=col-md-3 col-sm-3></div>
		<div class=col-md-6 col-sm-6>
			<form action=fetch.php method=post>
				<input type=submit value=Fetch class='btn btn-success'>
			</form>
		</div>
	</div>";
}	
	echo "</body>";
	echo "</html>";
?>