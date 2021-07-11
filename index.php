
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer details</title>
</head>
<body align='center' bgcolor="cornsilk">
    
    <h1>customer details</h1>
    <?php
 
   $username='dWqRsnAtPe';
    $password='tOahk66aZU';
    $server='remotemysql.com';
    $dbname='dWqRsnAtPe';


    $con=new mysqli($server,$username,$password,$dbname);

    if($con->connect_error)
    {
        die("connection abborted due to ".mysqli_connect_error());

    }
    else
    {
        echo "server connection established";
    }

    $sql = "SELECT `sno`,`name`,`email`,`balance`FROM `details`";
    $result = $con->query($sql);
    echo "<br>";
    if ($result->num_rows>0) {
        echo "<center>";
        echo "<table border='5px' padding='23px'>";
        echo "<tr>
        <td>
        sno
        </td>
        <td>name</td>
        <td>email</td>
        <td>balance</td>
        </tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row['sno']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['balance']."</td></tr>";

                
            }
        echo "</table>";
        echo "</center>";
        
} 




 
 
    $con->close();
?>
<br><br><br>
    
    <form action="transfer.php" method="post">
    <input type="text" name="transferredfrom" placeholder="transferfrom" required><br>
    <input type="text" name="transferredto" placeholder="transferto" required><br>
    <input type="number" name="amount" placeholder="amount" required><br>
    <input type="submit" value="transfer">

</form>

<form action="transferslist.php">
    <input type="submit" value="view previous transfers">
</form>


    
</body>
</html>
