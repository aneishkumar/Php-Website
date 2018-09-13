<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<header><?php include 'header1.html';?> </header>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

<title>Worthadeal</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  

</head>
<body>


<center>

  <blockquote class="w3-panel w3-leftbar w3-light-grey">
    <p class="w3-large"><font size="6.8"><i>"A penny saved is a penny earned"</i></p>
    <p>-English Proverb
</p></font>
  </blockquote> 
  </center>
  
  <h1><CENTER><font color="#341A58" size="7"><b>DEALS OF THE DAY<a href="todaydeals.php">(View All)</a></b></font></CENTER></h1>
<BR>

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


   
   $sql = "SELECT * FROM Product where Tod='1' and Fro='1' ";
   
   $result = $conn->query($sql);
   
   if(! $result ) {
      die('Could not get data: ' . mysql_error());
   }
  

      if ($result->num_rows > 0) {
    // output data of each row
echo '<table><tr>';
        while($customer = $result->fetch_assoc()) {       
       $i=1;

echo '<td width="350">';
echo '<center>';

echo ' <h1><a href="productpage.php?id='.$customer['Id'].'"><img src='.$customer['Imageurl'].' width="100" height="133" /></a></h1> ';


echo '<h2><b><font size="3">'.$customer['Name'].'</font></b></h2>';
echo '<h2><b><font size="3">'.$customer['Fhigh'].'</font></b></h2>';
echo '<h3><b><font size="3">Price:&#8377;<strike >('.$customer['Rprice'].')</strike>&nbsp;'.$customer['Dprice'].'&nbsp; '.$customer['Discount'].'%OFF</font></b></h3>';

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
echo' <h1><font size="12" ><center>Sorry Nothing To Show</font></center></h1>';
}
   
   
   $conn->close();
?>


















<center>

  <blockquote class="w3-panel w3-leftbar w3-light-grey">
    <p class="w3-large"><font size="6.8"><i>"The art is not making money, but keeping it"</i></p>
    <p>- Proverb
</p></font>
  </blockquote> 
  </center>
<br>
  

 <h1 ><CENTER><font color="#341A58" size="7"><b>BIG SAVER DEALS<a href="savingsdeals.php">(View All)</a></b></font></CENTER></h1>

<BR>
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


   
   $sql = "SELECT * FROM Product where Big='1' and Fro='1' ";
   
   $result = $conn->query($sql);
   
   if(! $result ) {
      die('Could not get data: ' . mysql_error());
   }
  

      if ($result->num_rows > 0) {
    // output data of each row
echo '<table><tr>';
        while($customer = $result->fetch_assoc()) {       
       $i=1;

echo '<td width="350">';
echo '<center>';

echo ' <h1><a href="productpage.php?id='.$customer['Id'].'"><img src='.$customer['Imageurl'].' width="100" height="133" /></a></h1> ';


echo '<h2><b><font size="3">'.$customer['Name'].'</font></b></h2>';
echo '<h2><b><font size="3">'.$customer['Fhigh'].'</font></b></h2>';
echo '<h3><b><font size="3">Price:&#8377;<strike>('.$customer['Rprice'].')</strike>&nbsp;'.$customer['Dprice'].'&nbsp; '.$customer['Discount'].'%OFF</font></b></h3>';

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
echo' <h1><font size="12" ><center>Sorry Nothing To Show</font></center></h1>';
}
   
   
   $conn->close();
?>

<center>
  <blockquote class="w3-panel w3-leftbar w3-light-grey">
    <p class="w3-large"><font size="6.8"><i>"Saving a small money soon bulid's upto a large money"</i></p>
    <p>-Scottish Proverb
</p></font>
  </blockquote> 
  </center>
 <h1><CENTER><font color="#341A58" size="7"><b>POPULAR DEALS<a href="populardeals.php">(View All)</a></b></font></CENTER></h1>
<BR>
<BR>
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


   
   $sql = "SELECT * FROM Product where Pop='1' and Fro='1' ";
   
   $result = $conn->query($sql);
   
   if(! $result ) {
      die('Could not get data: ' . mysql_error());
   }
  

      if ($result->num_rows > 0) {
    // output data of each row
echo '<table><tr>';
        while($customer = $result->fetch_assoc()) {       
       $i=1;

echo '<td width="350">';
echo '<center>';

echo ' <h1><a href="productpage.php?id='.$customer['Id'].'"><img src='.$customer['Imageurl'].' width="100" height="133" /></a></h1> ';


echo '<h2><b><font size="3">'.$customer['Name'].'</font></b></h2>';
echo '<h2><b><font size="3">'.$customer['Fhigh'].'</font></b></h2>';
echo '<h3><b><font size="3">Price:&#8377;<strike>('.$customer['Rprice'].')</strike>&nbsp;'.$customer['Dprice'].'&nbsp; '.$customer['Discount'].'%OFF</font></b></h3>';

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
echo' <h1><font size="12" ><center>Sorry Nothing To Show</font></center></h1>';
}
   
   $conn->close();
?>




</body>
</html>
<footer><?php include 'footer1.html';?></footer>