<html>
<header><?php include 'header1.html';?> </header>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>GROCERY AND FOODS</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<h1><font size="2.5"> <a href="index.php">WORTHADEAL</a>>HOME APPLIANCES</font></h1>
<h1><CENTER><font color="#341A58" size="7"><b>HOME APPLIANCES</b></font></CENTER></h1>
<BR><br>

<?php
  $servername = "localhost";
$username = "jmj";
$password = "^~jznP6*GJJA";
$dbname = "ProductWorth";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


    $i=1;
   $sql = "SELECT * FROM Product where Category='h' ORDER BY `Id` DESC";
   
   $result = $conn->query($sql);
   
   if(! $result ) {
      die('Could not get data: ' . mysql_error());
   }
  

      if ($result->num_rows > 0) {
    // output data of each row
echo '<table><tr>';
        while($customer = $result->fetch_assoc()) {       
      

echo '<td width="350">';
echo '<center>';

echo ' <h1><a href="productpage.php?id='.$customer['Id'].'"><img src='.$customer['Imageurl'].' width="220" height="140" /></a></h1> ';


echo '<h2><b><font size="3">'.$customer['Name'].'</font></b></h2>';
echo '<h2><b><font size="3">'.$customer['Fhigh'].'</font></b></h2>';
echo '<h3><b><font size="3">Price:&#8377;<strike>('.$customer['Rprice'].')</strike>&nbsp;<font color="#FF0027" >'.$customer['Dprice'].'</font>&nbsp; '.$customer['Discount'].'%OFF</font></b></h3>';

echo '<a href="productpage.php?id='.$customer['Id'].'">More details</a>';
echo '</center></td>';
if($i%4==0)
{
echo'</tr><tr>';
}
$i=$i+1;






    }
    }
    
echo ' </tr></table >'; 
 
  if ($result->num_rows == 0)
 {
echo' <h1><font size="12" ><center>Sorry Nothing To Show</font></center></h1><br><br><br><br><br><br><br><br>';
}
   
   $conn->close();
?>
<br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>
<footer><?php include 'footer1.html';?></footer>