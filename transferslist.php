<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>transfers list</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    
    
        <a class="navbar-brand" href="index.php">sparx bank</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                
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
    <h3 align='center'>previous transfers</h3>
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
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row['sno']."</td><td>".$row['transferredfrom']."</td><td>".$row['transferredto']."</td><td>".$row['transferredamount']."</td><td>".$row['senderbalance']."</td><td>".$row['recieverbalance']."</td><td>".$row['date']."</td></tr>";

            
        }
    echo "</tbody></table>";

    $con->close();
    ?>

    <center>
    <form action="passbook.php" method="post">
        <h3>get passbook of an account holder</h3>
        <input type="text" name="name" placeholder><br><br>
        <input type="submit" value="getpassbook">
    </form>
    </center>

    

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   </body>
</html>


