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
    $username='sql5426857';
    $password='3h9gyxdy51';
    $server='sql5.freesqldatabase.com';
    $dbname='sql5426857';


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
    echo "<h3 align='center'>transactions</h3>";
    echo "
    <div class='table-responsive'><table class='table table-bordered table-condensed'>
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
    echo "</tbody></table></div>";

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>


