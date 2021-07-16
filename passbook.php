
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
  
  <body bgcolor='cornsilk'>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    
    
        <a class="navbar-brand" href="index.php">sparx bank</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="passbook.html">passbook</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="details.php">view customers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="transferslist.php">previous transfers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
            </li>
        </ul>
        </div>
    </nav>
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
 <h3>transactions</h3>
    <table class='table table-bordered table-condensed'>
        <tr>
            <td>sno</td>
            <td>sender</td>
            <td>reciever</td>
            <td>amount</td>
            <td>sender balance</td>
            <td>reciever balance</td>
            <td>transfer date</td>
        </tr>";
        while($rowb = $resultb->fetch_assoc()) {
            if($rowb['transferredfrom']==$user || $rowb['transferredto']==$user)
            echo "<tr><td>".$rowb['sno']."</td><td>".$rowb['transferredfrom']."</td><td>".$rowb['transferredto']."</td><td>".$rowb['transferredamount']."</td><td>".$rowb['senderbalance']."</td><td>".$rowb['recieverbalance']."</td><td>".$rowb['date']."</td></tr>";

            
        }
    echo "</table>
    </center>";
    

   




$con->close();


?>


    </body>
    </html>
