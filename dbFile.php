<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "homeinfo";
$user = " ";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function dbSelect($conn,$user)
{
        $sql = "SELECT id,firstname, username, password FROM register";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row["username"] === $user) {
                    return $row["firstname"];
                }
             }
        }
}
