<?php
include'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
    <h2>Display Record</h2>
    <a href="index.php">Index</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Nme</th>
            <th>Age</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        $query = "select * from student";
        $result = mysqli_query($conn,$query);

        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                echo"<tr>";
                echo"<td>".$row['id']."</td>";
                echo"<td>".$row['firstname']."</td>";
                echo"<td>".$row['lastname']."</td>";
                echo"<td>".$row['age']."</td>";
                echo"<td><a href='edit.php?id=".$row['id']."'>Edit</a></td>";
                echo"<td><a href='delete.php?id=".$row['id']."'onclick=\"return confirm('Are You Sure')\">Delete</a></td>";
                echo"</tr>";

            }
        }
        else
        {
            echo"<tr><td colspan='6'>No Data Found</td></tr>";
        }
        ?>
    </table>
</body>
</html>