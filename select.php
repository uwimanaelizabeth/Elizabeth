<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php
include ('connection.php');
if (isset($_GET['delete'])) {
    $id=$_GET['delete'];
    $delete=mysqli_query($conn,"DELETE FROM trainee WHERE trainee_id='$id'");
    // if ($delete==true) {
    //     echo"<script> alert('Data Deleted')</script>";
    // }
}
?>
<div class="container">
<table border="1">
    <tr>
        <th>No</th>
        <th>Names</th>
        <th>Telephone</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <?php
include ('connection.php');
$select=mysqli_query($conn,"SELECT * FROM trainee");
while ($row=mysqli_fetch_array($select)) {
    ?>
    <tr>
        <td><?=$row['trainee_id']?></td>
        <td><?=$row['names']?></td>
        <td><?=$row['telephone']?></td>
        <td><?=$row['email']?></td>
        <td><a href="select.php?delete<?=$row['trainee_id']?>"><button class="btn btn-danger">Delete</button></a><a href="#"><button class="btn btn-primary">Update</button></a></td>
    </tr>
    <?php
}
    ?>
</table>
</div>