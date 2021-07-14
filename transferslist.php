<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transfers</title>
</head>
<body>
    <?php
    $username='sql5425083';
    $password='x8ZZtmrind';
    $server='sql5.freesqldatabase.com';
    $dbname='sql5425083';


    $con=new mysqli($server,$username,$password,$dbname);

    if($con->connect_error)
    {
        die("connection abborted due to ".mysqli_connect_error());

    }
    else
    {
        echo "server connection established";
    }

    $sql = "SELECT `sno`,`transferredfrom`,`transferredto`,`transferredamount`,`senderbalance`,`recieverbalance`,`date`FROM `transfers`";
    $result = $con->query($sql);
    echo "<br>";
    echo "<center>
    <table border='5px' padding='23px'>
        <tr>
            <td>sno</td>
            <td>sender</td>
            <td>reciever</td>
            <td>amount</td>
            <td>sender balance</td>
            <td>reciever balance</td>
            <td>transfer date</td>
        </tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row['sno']."</td><td>".$row['transferredfrom']."</td><td>".$row['transferredto']."</td><td>".$row['transferredamount']."</td><td>".$row['senderbalance']."</td><td>".$row['recieverbalance']."</td><td>".$row['date']."</td></tr>";

            
        }
    echo "</table>
    </center>";

    $con->close();
    ?>

    <center>
    <form action="passbook.php" method="post">
        <h3>get passbook of an account holder</h3>
        <input type="text" name="name" placeholder><br><br>
        <input type="submit" value="getpassbook">
    </form>
    </center>
</body>
</html>
