<?php 
$is_loggedin=$db->check_login_status();
if(!$is_loggedin){
    if($_SERVER['REQUEST_URI']!='/guest/login.php'){
        header("Location:login.php");
        exit();
    }
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
    <form id="add-guest">
        <h2> Add Guest</h2>
        
         <div class="form-field">
             <label>Name</label>
<input type="text" id="name" name="name" placeholder="Enter ur name">
</div>
  <div class="form-field">
             <label>Contact No.</label>
<input type="number" id="number" name="number" placeholder="Enter ur contact no.">
</div>
<div class="form-field">
             <label>Email</label>
<input type="email" id="email" name="email" placeholder="Enter ur email">
</div>
<div class="form-field">
             <label>Message</label>
<input type="message" id="message" name="message" placeholder="Enter ur message">
</div>
<input type="submit" value="submit">
    </form>
</body>
</html>