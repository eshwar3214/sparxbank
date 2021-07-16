<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>home</title>
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
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="transfer.html">transfer</a>
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
    <center>
  <img src="sparx_bank__1__auto_x2_colored_toned_light_ai-removebg.png" class="img-fluid" alt="..." >
</center>
<center>
  <form action="details.php" method="post">
      <input type="submit" value="get customer details">
  </form>
  <br>
  <form action="transferslist.php" method="post">
      <input type="submit" value="view previous transfers">
  </form>
</center>

<br>
    </body>

</html>
