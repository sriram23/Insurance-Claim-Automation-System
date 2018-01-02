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

$sql = "SELECT * FROM insureid";
$result = $conn->query($sql);
echo "<div class=row><div class=col-md-6></div>";
echo "<div class=col-md-4>";
echo "<table>";
if ($result->num_rows > 0) {
    // output data of each row
    echo "<tr><th>ID</th><th>CONTACT</th><th>NAME</th><th>DATE/TIME</th><th>VEHICLE NUMBER</th><th>VEHICLE MAKE</th><th>LOCATION</th><th>EXTENT</th><th>DESCRIPTION</th><th>GARAGE</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["insuranceId"]. "</td><td>" . $row["contact"]. "</td>"."<td>" . $row["name"]. "</td><td>" . $row["date"]. "</td><td>" . $row["vehicleNumber"]. "</td><td>" . $row["vehicleMake"]. "</td><td>" . $row["location"]. "</td><td>" . $row["extent"]. "</td><td>" . $row["description"]. "</td><td>" . $row["garageName"]. "</td></tr>";
    }
} else {
    echo "<tr><td>0 results</td></tr>";
}
echo "</table>";
echo "</div></div>";
$conn->close();

?>