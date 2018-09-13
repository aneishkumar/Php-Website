<html>
<header> </header>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>MobilePhones</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
td {
    border: 2px solid black;
}


ul {
    list-style-type: none;
   margin: 0 ;

    padding: 12px 30px;
    width: 18%;
    background-color: #FFE001;
    position: fixed;
    height: 100%;
    overflow: auto;
}

sl
{
height: 10%;
overflow: auto;
}
nav
{

margin-left:19%;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #FF0101;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}

.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 18px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 0px 0px;
    cursor: pointer;
}

.button2 {background-color: #FFE001;} /* yellow */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #B03ADF;} color: black;} /* Gray */ 
.button5 {background-color: #FFE1FF;}
.button6 {background-color: #000000;} /* Black */

.checked {
    color: orange;
}
</style>
</head>
<body>

<?php

$sort=$_GET['sort'];
$price=$_GET['price'];

echo '

<ul>
<b>

<li><a href="index.php">Home</a></li>
<li><a class="active">HandPicked Deals</a></li>
<li><a href="EyeCatching.php">Eye-Catching Deals</a></li>
<li><a href="OtherWorthy.php">Other-Worthy Deals</a></li>
<br>';
if($sort==0){
echo '
<li><a class="active" >Rating High to Low</a></li>
<li><a href="HandPicked.php?sort=1&price='.$price.'">Rating Low to High</a></li>
<li><a href="HandPicked.php?sort=2&price='.$price.'">Price Low to High</a></li>
<li><a href="HandPicked.php?sort=3&price='.$price.'">Price High to Low</a></li>';
}
if($sort==1){
echo '
<li><a href="HandPicked.php?sort=0&price='.$price.'" >Rating High to Low</a></li>
<li><a  class="active" >Rating Low to High</a></li>
<li><a href="HandPicked.php?sort=2&price='.$price.'">Price Low to High</a></li>
<li><a href="HandPicked.php?sort=3&price='.$price.'">Price High to Low</a></li>';
}
if($sort==2){
echo '
<li><a  href="HandPicked.php?sort=0&price='.$price.'">Rating High to Low</a></li>
<li><a href="HandPicked.php?sort=1&price='.$price.'">Rating Low to High</a></li>
<li><a class="active" >Price Low to High</a></li>
<li><a href="HandPicked.php?sort=3&price='.$price.'">Price High to Low</a></li>';
}
if($sort==3){
echo '
<li><a href="HandPicked.php?sort=0&price='.$price.'" >Rating High to Low</a></li>
<li><a href="HandPicked.php?sort=1&price='.$price.'">Rating Low to High</a></li>
<li><a href="HandPicked.php?sort=2&price='.$price.'">Price Low to High</a></li>
<li><a class="active" >Price High to Low</a></li>';
}
echo '<br>';
if($price==0){
echo '
<li><a class="active"  >All Price</a></li>
  <li><a href="HandPicked.php?sort='.$sort.'&price=1"  >Below ₹ 500</a></li>
<li><a  href="HandPicked.php?sort='.$sort.'&price=2">₹ 500 - ₹ 1,000</a></li>
<li><a href="HandPicked.php?sort='.$sort.'&price=3">₹ 1,000 - ₹ 10,000</a></li>
<li><a  href="HandPicked.php?sort='.$sort.'&price=4">Above ₹ 20,000</a></li>
<br>';
}
if($price==1){
echo '
<li><a  href="HandPicked.php?sort='.$sort.'&price=0" >All Price</a></li>
  <li><a  class="active" >Below ₹ 500</a></li>

<li><a  href="HandPicked.php?sort='.$sort.'&price=2">₹ 500 - ₹ 1,000</a></li>
<li><a href="HandPicked.php?sort='.$sort.'&price=3">₹ 1,000 - ₹ 10,000</a></li>
<li><a  href="HandPicked.php?sort='.$sort.'&price=4">Above ₹ 20,000</a></li>
<br>';
}if($price==2){
echo '
<li><a  href="HandPicked.php?sort='.$sort.'&price=0" >All Price</a></li>
  <li><a href="HandPicked.php?sort='.$sort.'&price=1"  >Below ₹ 500</a></li>

<li><a class="active" >₹ 500 - ₹ 1,000</a></li>
<li><a href="HandPicked.php?sort='.$sort.'&price=3">₹ 1,000 - ₹ 10,000</a></li>
<li><a  href="HandPicked.php?sort='.$sort.'&price=4">Above ₹ 20,000</a></li>
<br>';
}if($price==3){
echo '
<li><a  href="HandPicked.php?sort='.$sort.'&price=0" >All Price</a></li>
  <li><a  href="HandPicked.php?sort='.$sort.'&price=1" >Below ₹ 500</a></li>

<li><a  href="HandPicked.php?sort='.$sort.'&price=2">₹ 500 - ₹ 1,000</a></li>
<li><a class="active" >₹ 1,000 - ₹ 10,000</a></li>
<li><a  href="HandPicked.php?sort='.$sort.'&price=4">Above ₹ 20,000</a></li>
<br>';
}if($price==4){
echo '
<li><a  href="HandPicked.php?sort='.$sort.'&price=0" >All Price</a></li>
  <li><a  href="HandPicked.php?sort='.$sort.'&price=1" >Below ₹ 500</a></li>

<li><a  href="HandPicked.php?sort='.$sort.'&price=2">₹ 500 - ₹ 1,000</a></li>
<li><a href="HandPicked.php?sort='.$sort.'&price=3">₹ 1,000 - ₹ 10,000</a></li>
<li><a class="active" >Above ₹ 20,000</a></li>
<br>';
}
if($price==1)
{
$price1="<500";

}
if($price==2)
{
$price1="BETWEEN 500 AND 1000";

}
if($price==3)
{
$price1="BETWEEN 1000 AND 2000";

}
if($price==4)
{
$price1=">2000";

}





echo ' </ul>






<div style="margin-left:22%;padding:1px 16px; height:100%">

<h1><CENTER><button class="button button6"><font color="white"  size="6.3"><b>HandPicked Deals</b></font></button></CENTER></h1>
<BR>';







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

   
if($sort==0)
{
if($price==0)

{
$sql = "SELECT * FROM Pro ORDER BY `Score` DESC ";
}else if($price>0)
{


$sql = "SELECT * FROM Pro Where HandPicked='1' And Price $price1 ORDER BY `Score` DESC ";
}
}
if($sort==1)
{
if($price==0)

{
$sql = "SELECT * FROM Pro where HandPicked='1' ORDER BY `Score` DESC ";
}else if($price>0)
{


$sql = "SELECT * FROM Pro Where HandPicked='1' And Price $price1 ORDER BY `Score` ASC ";
}
}

if($sort==2)
{
if($price==0)

{
$sql = "SELECT * FROM Pro where HandPicked='1' ORDER BY `Price` ASC ";
}else if($price>0)


{
$sql = "SELECT * FROM Pro Where HandPicked='1' And Price $price1 ORDER BY `Price` ASC ";
}
}
if($sort==3)
{
if($price==0)

{
$sql = "SELECT * FROM Pro where HandPicked='1' ORDER BY `Price` DESC ";
}else if($price>0)


{
$sql = "SELECT * FROM Pro Where HandPicked='1' And Price $price1 ORDER BY `Price` DESC ";
}
}










   
   $result = $conn->query($sql);
   
   if(! $result ) {
      die('Could not get data: ' . mysql_error());
   }
  
 
      if ($result->num_rows > 0) {
    // output data of each row
echo '<table><tr>';
        while($customer = $result->fetch_assoc()) {       
       $discount=round((($customer['RealPrice']-$customer['Price'])/$customer['RealPrice'])*100);

echo '<td width="350">';
echo '<center>';
echo '<h2><b><a href="'.$customer['Url'].'" target="_blank"><button class="button button4 "><font color="#FFE1FF" size="3"> '.$customer['Name'].'</button></font></b></h2>';


echo ' <h1><img src=images/'.$customer['Id'].'.jpg width="100" height="120" /></h1> ';


echo '<h2><b> <button class="button "><font size="2"><b>'.$customer['High'].'</font></b></button></h2>';
echo '<h3><b>';
if($customer['Shoppingsite']==0)
{
echo'<img src="amazon.jpg" width="120" height="30" />';
}
if($customer['Shoppingsite']==1)
{
echo'<img src="flipkart.png" width="120" height="41" />';
}
echo'<button class="button button2"><font color="black" size="3">&#8377;<strike >('.$customer['RealPrice'].')</strike>&nbsp;<font color="#FF0027" >'.$customer['Price'].'</font>&nbsp; %'.$discount.' OFF </font></b></button></h3>';
echo '</center></a></td>';
if($i%3==0)
{
echo'</tr><tr>';
}
$i=$i+1;






    }
    }
    
echo ' </tr></table ><br>'; 

   
     if ($result->num_rows == 0)
 {
echo' <h1><font size="12" ><center>Sorry Nothing To Show</font></center></h1><br><br><br><br><br><br><br><br>';
}
   
   $conn->close();
?>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>


</body>


</html>
