<?php

$username='root';
$password='';
$server='localhost';
$dbname='customers';


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
        while($rowb = $resultb->fetch_assoc()) {
            if($rowb['transferredfrom']==$user || $rowb['transferredto']==$user)
            echo "<tr><td>".$rowb['sno']."</td><td>".$rowb['transferredfrom']."</td><td>".$rowb['transferredto']."</td><td>".$rowb['transferredamount']."</td><td>".$rowb['senderbalance']."</td><td>".$rowb['recieverbalance']."</td><td>".$rowb['date']."</td></tr>";

            
        }
    echo "</table>
    </center>";
    

   




$con->close();


?>