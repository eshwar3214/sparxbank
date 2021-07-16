

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>passbook</title>
  </head>
  <body>


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

$user=$_POST['name'];

$sqa="SELECT * FROM details";

$resulta=$con->query($sqa);

while($rowa= $resulta->fetch_assoc()) {
if($rowa['name']==$user)
{
    $balance=$rowa['balance'];
    $email=$rowa['email'];
    break;
    
}



}


$sqb="SELECT * FROM transfers";

$resultb=$con->query($sqb);

echo "<center>
<br>$user $email $balance
<h3>transactions</h3>";
echo "
    <table class='table'>
        <thead class='thead-dark'>
        <tr>
            <td>sno</td>
            <td>sender</td>
            <td>reciever</td>
            <td>amount</td>
            <td>sender balance</td>
            <td>reciever balance</td>
            <td>transfer date</td>
        </tr></thead><tbody>"
        ;
    while($rowb = $resultb->fetch_assoc()) {
        if($rowb['transferredfrom']==$user || $rowb['transferredto']==$user)
        echo "<tr><td>".$rowb['sno']."</td><td>".$rowb['transferredfrom']."</td><td>".$rowb['transferredto']."</td><td>".$rowb['transferredamount']."</td><td>".$rowb['senderbalance']."</td><td>".$rowb['recieverbalance']."</td><td>".$rowb['date']."</td></tr>";

        
    }
    echo "</tbody></table>";







$con->close();


?>
  

    

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   </body>
</html>


