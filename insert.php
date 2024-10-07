<?php
include ('connection.php');
if (isset($_POST['save'])) {
    $names=$_POST['names'];
    $telephone=$_POST['telephone'];
    $email=$_POST['email'];
    $insert=mysqli_query($conn,"INSERT INTO trainee(names,telephone,email) VALUES('$names','$telephone','$email')");
    if ($insert==true) {
        echo "<script> alert('Data Inserted')</script>";
    }else {
        echo "Data Not inserted";
    }
}
?>