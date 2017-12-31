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
	echo "<div class=row><div class=col-md-3 col-sm-3></div>
		<div class=col-md-6 col-sm-6>
			<form action=Entry.php method=post>
				<label>Enter Insurance ID</label>
				<input type=text class=form-control id=Iid name=Iid><br>
				<input type=submit value=Store class='btn btn-primary'>
			</form>
		</div>
	</div>";

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