<?php
include'connection.php';

$id = (int)$_GET['id'];

$query = "select * from student where id=$id";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update_btn']))
{
    $fname = trim($_POST['firstname']);
    $lname = trim($_POST['lastname']);
    $age   = trim($_POST['age']);

    if($fname==''|| $lname==''|| $age=='')
    {
        echo"<script>alert('pls Filled All Filled');</script>";
    }
    else
    {
        $update = "update student 
                   set firstname='$fname',lastname='$lname',age='$age' 
                   where id=$id";
        if(mysqli_query($conn,$update))
        {
            header("Location:display.php");
            exit();
        }
        else
        {
            echo"Record is Not Updated..";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <h2>Record Upadte</h2>
    <div>
        <form action=""method="POST">
            <input type="text" name="firstname" value="<?=$row['firstname'];?>"><br><br>
            <input type="text" name="lastname" value="<?=$row['lastname']?>"><br><br>
            <input type="number" name="age" min="1" value="<?= $row['age']?>"><br><br>
            <input type="submit" name="update_btn" value="Update">
        </form>
    </div>
    
</body>
</html>