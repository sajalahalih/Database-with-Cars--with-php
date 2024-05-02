<html>
<head>
<style>
   td, tr, th {
        border: 1px solid black;
        padding: 8px; /* Adjust padding as needed */
    }

    table {
      font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 70%; /* Set table width to 100% */
        margin-top: 20px; /* Add spacing between the table and other elements */
    }

    th {
        background-color: lightblue; /* Optional: Add background color to header cells */
    }
     tr:nth-child(odd){background-color: #f2f2f2;}

 tr:hover {background-color: #ddd;}

</style>
</head>

<?php
session_start();
if(isset($_SESSION['name'])){

}
else{
  header ('Location: log.php');
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ass2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM address";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
  echo "<table>";
  echo "<tr><th>ID</th><th>Building</th><th>Street</th><th>City</th><th>Country</th></tr>";

    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
      echo "<td>". $row["id"]. "</td><td>   " . $row["buidling"]. " </td><td>  " . $row["street"]. "  </td><td> " . $row["city"]. "  </td><td> " . $row["country"]. "</td>";
      echo "</tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
  $conn->close();

?>
<br>

</html>