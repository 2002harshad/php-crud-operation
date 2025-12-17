<?php
include'connection.php';


if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $query = "delete from student where id = $id";
    $result = mysqli_query($conn,$query);
    if($result)
    {
        header("Location:display.php");
        exit();
    }
    else
    {
        echo"Record is Not Deleted..";
    }
}
else
{
    header("Location:display.php");
    exit();
}
?>

