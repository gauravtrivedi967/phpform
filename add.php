<?php
include('config.php')
?>

<?php
if(isset($POST['submit'])){
$username = $_POST['name'];
$branch = $_POST['branch'];
$year = $_POST['year'];
$city = $_POST['city'];
$gender = $_POST['gender'];
$email = $_POST['email'];

$sql = "INSERT INTO `users` (`username`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city')";
mysql_query($conn, $sql);
$sql = "INSERT INTO `student_details` (`username`, `branch`, `year`) VALUES ('$username', '$branch', '$year')";
mysql_query($conn, $sql);
}
else{
echo "please enter the details";
}

?>

<!DOCTYPE html>
<head>
</head>
<html>
  <body>
    <form method="POST" action="form.php">
        Name <input type="text" name="name" required ><br>
        E-mail <input type="text" name="email" required ><br>
        branch <input type="text" name="branch" required><br>
        Year <input type="number" name="year" required><br>
        City <input type="text" name="city" required><br>
        Gender:
        Male <input type="radio" value="male" name="gender">
        Female <input type="radio" value="female" name="gender"><br>
        <input type="submit" value="submit" name="submit"><br>
    </form>
  </body>
</html>
