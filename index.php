<?php
include'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="POST">
            <input type="text" name="firstname"><br>
            <input type="text" name="lastname"><br>
            <input type="number" name="age"><br>
            <input type="submit" name="save_btn" value="Save">
            <button><a href="display.php">Display</a></button>
        </form>
    </div>
    <?php
    if(isset($_POST['save_btn']))
    {
        $fname=trim($_POST['firstname']);
        $lname=trim($_POST['lastname']);
        $age=trim($_POST['age']);

        if($fname==''|| $lname==''|| $age=='')
        {
            echo"Filled Value";
        }
        else
        {
            $query = "INSERT INTO student (firstname,lastname,age) values('$fname','$lname','$age')";

            if(mysqli_query($conn,$query))
            {
                header("Location:index.php");
            }
        }

    }
    ?>
</body>
</html>