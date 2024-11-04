
<?php
$conn=mysql_connect('localhost','root','contactdb')or die('connection failed');
if(isset($post['submit'])){
  $name=mysql_real-escape_string($conn,$_post['name']);
  $name=mysql_real-escape_string($conn,$_post['email']);
  $number=$_post['number'];
  $date=$_post['date'];
  $number=$_post['number'];
  $insert=mysql_query($conn,"INSERT INTO`contact_form`(name,email,number,date,number) VALUES($name,$email,$number,$date,$number)
  if($insert){
  $message[]='Appointment made sucessfull';
  }
  else{
  $message[]='Appointment failed';
  }
}
?>





<?php
// Establish connection using MySQLi
$servername = "localhost";
$username = "root";
$password = "contactdb";
$dbname = "your_database_name"; // Change this to your actual database name
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if(isset($_POST['submit'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];
    $fee = $_POST['fee']; // Changed variable name to fee
    $sql = "INSERT INTO contact_form (name, email, number, date, fee) VALUES ('$name', '$email', '$number', '$date', '$fee')";

    if ($conn->query($sql) === TRUE) {
        $message = 'Appointment made successfully';
    } else {
        $message = 'Error: ' . $sql . '<br>' . $conn->error;
    }
}

// Close connection
$conn->close();
?>