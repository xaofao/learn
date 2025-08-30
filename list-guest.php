<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guest";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$name=$_POST['name']??'';
$number=$_POST['number']??'';
$email=$_POST['email']??'';
$message=$_POST['message']??'';

$sql = "INSERT INTO `list-guest` (`name`,`number`, `email`,`message`)
VALUES ('$name', '$number', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Guest Data</h2>
    <table>
          <?php if ($result->num_rows > 0) { ?>
        <tr>
            <td> Name</td>
            <td> Number</td>
            <td> email</td>
            <td> message</td>
        </tr>
        <?php while($row = $result->fetch_assoc()) {  ?>
            <tr>
                <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['number'];?></td>
                    <td><?php echo $row['email'];?></td> 
                    <td><?php echo $row['message'];?></td>
            </tr>
             <?php }?>
 <?php
     } else {
    echo "0 results";
}
    ?>
    </table>
</body>
</html>