<?php
$servername = "localhost";
$username = "root";
$password = "bharathi123";
$dbname = "wordpress";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['email'];
    $pwd = $_POST['pswd'];
    $sql = "SELECT * FROM users WHERE email='".$name."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          //echo "id: " . $row["id"]. " - Name: " . $row["user"]. " " . $row["email"]. "<br>";
          if ($name ==  $row["email"]) {
            if (md5($pwd) == $row["password"]){
              echo "<br><div class='container text-center card bg-success text-white'>";
              echo "<div class='card-body'><center><h4>Login Success</h4></center></div>";
              echo "</div>";
              echo "<h2><center>Welcome ".$row["username"]." !!!!</center></h2>";
            } else {
              echo "<br><div class='container text-center card bg-danger text-white'>";
              echo "<div class='card-body'><center><h4>Login Failed</h4></center></div>";
              echo "</div>";
              // header("Location: http://localhost/wordpress/login.php");
            }
          }
      }
    } else {
      echo "<br><div class='container text-center card bg-danger text-white'>";
      echo "<div class='card-body'><center><h4>Login Failed</h4></center></div>";
      echo "</div>";
      echo "<h3><center>Invalid email id</center></h3>";
    }
    $conn->close();
}
?>
