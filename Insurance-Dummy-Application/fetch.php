<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "insure";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM insuranceautomation";
$result = $conn->query($sql);
echo "<div class=row><div class=col-md-6></div>";
echo "<div class=col-md-4>";
echo "<table border=10%>";
if ($result->num_rows > 0) {
    // output data of each row
    echo "<tr><th>POLICYNUMBER</th><th>VEHICLE NUMBER</th><th>NAME</th><th>ADDRESS</th><th>CITY</th><th>PIN</th><th>MOBILE</th><th>LANDLINE</th><th>EMAIL</th><th>DATE</th><th>PLACE</th><th>TYPE OF LOSS</th><th>DESCRIPTION</th><th>DRIVER NAME</th><th>DRIVER AGE</th><th>DRIVING LICENSE NUMBER</th><th>RTO</th><th>LEARNER LICENSE</th><th>COPASSENGER DETAILS</th><th>TIME STAMP</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["PolicyNumber"]. "</td><td>" . $row["VehicleNumber"]. "</td>"."<td>" . $row["Name"]. "</td><td>" . $row["Address"]. "</td><td>" . $row["City"]. "</td><td>" . $row["Pin"]. "</td><td>" . $row["Mobile"]. "</td><td>" . $row["Landline"]. "</td><td>" . $row["Email"]. "</td><td>" . $row["Date"]. "</td><td>" . $row["Place"]. "</td><td>" . $row["Typeofloss"]. "</td><td>" . $row["Description"]. "</td><td>" . $row["Dname"]. "</td><td>" . $row["Dage"]. "</td><td>" . $row["DLicense"]. "</td><td>" . $row["RTO"]. "</td><td>" . $row["LL"]. "</td><td>" . $row["Copassenger"]. "</td><td>" . $row["TimpStamp"]. "</td></tr>";
    }
} else {
    echo "<tr><td>0 results</td></tr>";
}
echo "</table>";
echo "</div></div>";
$conn->close();

?>