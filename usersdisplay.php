<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
            $cnn = mysqli_connect("localhost", "root", "", "execute");
            $qry = "SELECT * FROM users";
            $result = $cnn->query($qry);
            while ($row = $result->fetch_assoc()) {
                $userid = $row["userid"];
                $username = $row["username"];
                $email = $row["email"];
                $userpwd =$row["userpwd"];

                echo "<tr>
                        <td>$userid</td>
                        <td>$username</td>
                        <td>$email</td>
                        <td>$userpwd</td>
                    </tr>";
            }
            ?>
    
</body>
</html>