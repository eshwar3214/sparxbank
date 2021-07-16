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

    $amount=$_POST['amount'];
    $sender=strtolower($_POST['transferredfrom']);
    $reciever=strtolower($_POST['transferredto']);

    $flag1=0;
    $flag2=0;


    $sql = "SELECT `sno`,`name`,`email`,`balance`  FROM `details`";
    $result = $con->query($sql);

    while($row = $result->fetch_assoc()) {
        if($row['name']==$reciever)
        {
            $recieverdummy=$row['balance'];
            $flag1=1;
        }
        if($row['name']==$sender)
        {
            $senderdummy=$row['balance'];
            $flag2=1;
        }

       
    }

    

    if(!$flag1)
    {
        echo "<br>";
        echo "check the reciever name"."<br>";
        die("connection died");
    }
    if(!$flag2)
    {
        echo "<br>";
        echo "check the sender name"."<br>";

        die("connection died");
    }


    echo $recieverdummy . $senderdummy;

    $intrecieverdummy=(int)$recieverdummy;
    $intrecieverdummy=$intrecieverdummy+$amount;

    $intsenderdummy=(int)$senderdummy;

    if($intsenderdummy<$amount)
    {
        echo "<br>insufficient funds";
        die("<br>connection died ");
    }
    
    $intsenderdummy=$intsenderdummy-$amount;

    
   
    
    
    
    

    
    echo "<br>";

    $sqa="UPDATE `details` SET balance='$intrecieverdummy' WHERE name='$reciever'";
    $sqb="UPDATE `details` SET balance='$intsenderdummy' WHERE name='$sender'";
    $sqc="INSERT INTO `transfers` (transferredfrom, transferredto, transferredamount, senderbalance, recieverbalance) VALUES ('$sender', '$reciever', '$amount','$intsenderdummy','$intrecieverdummy')";
    
    if($con->query($sqa)==TRUE && $con->query($sqb)==TRUE)
    {
        echo "transferred successfully from ".$sender ." to ". $reciever." of amount " .$amount;
    }
    else
    {
        echo "not transferred";
    }
    
    echo "<br>";
    if($con->query($sqc)==TRUE)
    {
        echo "record updated successfully";
    }
    else
    {
        echo "not updated";
    }



    $con->close();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php">
    <input type="submit" value="back"></form>
</body>
</html>
