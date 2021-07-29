
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="transfer.html">transfer</a>
          </li>
            <li class="nav-item active">
              <a class="nav-link" href="passbook.html">passbook</a>
          </li>
                <li class="nav-item active">
                    <a class="nav-link" href="details.php">view customers</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="transferslist.php">previous transfers</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>

          </ul>
          
      </nav>

    <?php

$username='mxzdNuhTG0';
$password='EcrWfxdjCS';
$server='remotemysql.com';
$dbname='mxzdNuhTG0';
$con=new mysqli($server,$username,$password,$dbname);

if($con->connect_error)
{
    die("connection abborted due to ".mysqli_connect_error());

}
else
{
    echo "server connection established";
}

$user=strtolower($_POST['name']);

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
 <br><table><tr><td>name   :</td><td>".$user."</td></tr><tr><td>email   :</td><td>".$email."</td></tr><tr><td>balance:</td><td>".$balance."</td></tr></table>
 <h3>transactions</h3>
    <div class='table-responsive'><table class='table table-bordered table-condensed'>
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
    echo "</table></div>
    </center>";
    

   




$con->close();


?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  

    </body>
    </html>
