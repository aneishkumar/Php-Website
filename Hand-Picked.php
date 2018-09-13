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
    padding: 12px 30px;
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
$brand=$_GET['brand'];
echo '

<ul>
<b>

<li><a href="mobilesearch.php">Search Mobile</a></li>
<li><a href="#news">Compare Mobile</a></li>
<br>';
if($sort==0){
echo '
<li><a class="active" >Rating High to Low</a></li>
<li><a href="Mobile.php?sort=1&price='.$price.'&brand='.$brand.'">Rating Low to High</a></li>
<li><a href="Mobile.php?sort=2&price='.$price.'&brand='.$brand.'">Price Low to High</a></li>
<li><a href="Mobile.php?sort=3&price='.$price.'&brand='.$brand.'">Price High to Low</a></li>';
}
if($sort==1){
echo '
<li><a href="Mobile.php?sort=0&price='.$price.'&brand='.$brand.'">Rating High to Low</a></li>
<li><a class="active">Rating Low to High</a></li>
<li><a href="Mobile.php?sort=2&price='.$price.'&brand='.$brand.'">Price Low to High</a></li>
<li><a href="Mobile.php?sort=3&price='.$price.'&brand='.$brand.'">Price High to Low</a></li>';
}
if($sort==2){
echo '
<li><a href="Mobile.php?sort=0&price='.$price.'&brand='.$brand.'">Rating High to Low</a></li>
<li><a href="Mobile.php?sort=1&price='.$price.'&brand='.$brand.'">Rating Low to High</a></li>
<li><a class="active" >Price Low to High</a></li>
<li><a href="Mobile.php?sort=3&price='.$price.'&brand='.$brand.'">Price High to Low</a></li>';
}
if($sort==3){
echo '
<li><a href="Mobile.php?sort=0&price='.$price.'&brand='.$brand.'">Rating High to Low</a></li>
<li><a href="Mobile.php?sort=1&price='.$price.'&brand='.$brand.'">Rating Low to High</a></li>
<li><a href="Mobile.php?sort=2&price='.$price.'&brand='.$brand.'">Price Low to High</a></li>
<li><a class="active" >Price High to Low</a></li>';
}
echo '<br>';


if($price==0){
echo '
<li><a class="active" >All Price</a></li>
  <li><a  href="Mobile.php?sort='.$sort.'&price=1&brand='.$brand.'" >Below ₹ 1,000</a></li>

<li><a  href="Mobile.php?sort='.$sort.'&price=2&brand='.$brand.'">₹ 1,000 - ₹ 10,000</a></li>
<li><a href="Mobile.php?sort='.$sort.'&price=3&brand='.$brand.'">₹ 10,000 - ₹ 20,000</a></li>
<li><a  href="Mobile.php?sort='.$sort.'&price=4&brand='.$brand.'">Above ₹ 20,000</a></li>
<br>';
}
if($price==1){
echo '
<li><a  href="Mobile.php?sort='.$sort.'&price=0&brand='.$brand.'" >All Price</a></li>
  <li><a  class="active" >Below ₹ 1,000</a></li>

<li><a  href="Mobile.php?sort='.$sort.'&price=2&brand='.$brand.'">₹ 1,000 - ₹ 10,000</a></li>
<li><a href="Mobile.php?sort='.$sort.'&price=3&brand='.$brand.'">₹ 10,000 - ₹ 20,000</a></li>
<li><a  href="Mobile.php?sort='.$sort.'&price=4&brand='.$brand.'">Above ₹ 20,000</a></li>
<br>';
}
if($price==2){
echo '
<li><a  href="Mobile.php?sort='.$sort.'&price=0&brand='.$brand.'" >All Price</a></li>
  <li><a  href="Mobile.php?sort='.$sort.'&price=1&brand='.$brand.'">Below ₹ 1,000</a></li>

<li><a  class="active" >₹ 1,000 - ₹ 10,000</a></li>
<li><a href="Mobile.php?sort='.$sort.'&price=3&brand='.$brand.'">₹ 10,000 - ₹ 20,000</a></li>
<li><a  href="Mobile.php?sort='.$sort.'&price=4&brand='.$brand.'">Above ₹ 20,000</a></li>
<br>';
}
if($price==3){
echo '
<li><a  "Mobile.php?sort='.$sort.'&price=0&brand='.$brand.'" >All Price</a></li>
  <li><a  href="Mobile.php?sort='.$sort.'&price=1&brand='.$brand.'">Below ₹ 1,000</a></li>

<li><a  href="Mobile.php?sort='.$sort.'&price=2&brand='.$brand.'">₹ 1,000 - ₹ 10,000</a></li>
<li><a class="active">₹ 10,000 - ₹ 20,000</a></li>
<li><a  href="Mobile.php?sort='.$sort.'&price=4&brand='.$brand.'">Above ₹ 20,000</a></li>
<br>';
}
if($price==4){
echo '
<li><a  href="Mobile.php?sort='.$sort.'&price=0&brand='.$brand.'" >All Price</a></li>
  <li><a  href="Mobile.php?sort='.$sort.'&price=1&brand='.$brand.'">Below ₹ 1,000</a></li>

<li><a  href="Mobile.php?sort='.$sort.'&price=2&brand='.$brand.'">₹ 1,000 - ₹ 10,000</a></li>
<li><a href="Mobile.php?sort='.$sort.'&price=3&brand='.$brand.'">₹ 10,000 - ₹ 20,000</a></li>
<li><a  class="active">Above ₹ 20,000</a></li>
<br>';
}
if($brand==0){
echo '<br>

<li><a  class="active" >All Brands </a></li>
 <li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=1">Samsung</a></li>
<li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=2">Oppo</a></li>
<li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=3">Xiaomi</a></li>
<li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=4">Vivo</a></li>
<li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=5">Others Brands</a></li>';

}
if($brand==1){
echo '<br>

<li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=0">All Brands </a></li>
 <li><a  class="active" >Samsung</a></li>
<li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=2">Oppo</a></li>
<li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=3">Xiaomi</a></li>
<li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=4">Vivo</a></li>
<li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=5">Others Brands</a></li>';

}
if($brand==2){
echo '<br>

<li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=0">All Brands </a></li>
 <li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=1">Samsung</a></li>
<li><a  class="active" ">Oppo</a></li>
<li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=3">Xiaomi</a></li>
<li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=4">Vivo</a></li>
<li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=5">Others Brands</a></li>';

}
if($brand==3){
echo '<br>

<li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=0">All Brands </a></li>
 <li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=1">Samsung</a></li>
<li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=2">Oppo</a></li>
<li><a  class="active" >Xiaomi</a></li>
<li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=4">Vivo</a></li>
<li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=5">Others Brands</a></li>';

}
if($brand==4){
echo '<br>

<li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=0">All Brands </a></li>
 <li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=1">Samsung</a></li>
<li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=2">Oppo</a></li>
<li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=3">Xiaomi</a></li>
<li><a  class="active" >Vivo</a></li>
<li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=5">Others Brands</a></li>';

}
if($brand==5){
echo '<br>

<li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=0">All Brands </a></li>
 <li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=1">Samsung</a></li>
<li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=2">Oppo</a></li>
<li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=3">Xiaomi</a></li>
<li><a  href="Mobile.php?sort='.$sort.'&price='.$price.'&brand=4">Vivo</a></li>
<li><a  class="active" ">Others Brands</a></li>';

}


echo ' </ul><div style="margin-left:19%;>
<a href="index.php"><img src="logo.png" width="190" height="100"  /></a>
</div>


<nav class="navbar navbar-default" style="font-weight: bold;   background-color: #66004d;">

  <div  class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand"  href="todaydeals.php"><font color="white">Hand Picked Deals</font></a>
    </div>
<div class="navbar-header">
      <a class="navbar-brand"  href="eyecatching.php"><font color="white">Eye Catching Deals</font></a>
    </div>
<div class="navbar-header">
      <a class="navbar-brand"  href="Mobile.php?sort=0&price=0&brand=0"><font color="white">Mobile</font></a>
    </div>
<div class="navbar-header">
      <a class="navbar-brand"  href="Laptop.php"><font color="white">Laptops</font></a>
    </div>
<div class="navbar-header">
      <a class="navbar-brand"  href="Others.php"><font color="white">Others</font></a>
    </div>
    
       
      
          
      
      
        
        
        
        
      
      </div>
     
      </nav>



<div style="margin-left:25%;padding:1px 16px; height:100%">

<h1><CENTER><button class="button button6"><font color="white"  size="6.3"><b>MobilePhones</b></font></button></CENTER></h1>
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
if($brand==0)
{
$sql = "SELECT * FROM Mobile ORDER BY `Score` DESC ";
}}}
if($sort==1)
{
if($price==0)
{
if($brand==0)
{
$sql = "SELECT * FROM Mobile ORDER BY `Score` Asc";
}}}
if($sort==2)
{
if($price==0)
{
if($brand==0)
{
$sql = "SELECT * FROM Mobile ORDER BY `Price` Asc  ";
}}}
if($sort==3)
{
if($price==0)
{
if($brand==0)
{
$sql = "SELECT * FROM Mobile ORDER BY `Price` DESC  ";
}}}


if($sort==0)
{
if($price>0)
{
if($brand>0)
{
$sql = "SELECT * FROM Mobile where Pricerange=$price AND Brandnumber=$brand  ORDER BY `Score` DESC ";
}else
{
$sql = "SELECT * FROM Mobile where Pricerange=$price  ORDER BY `Score` DESC ";
}

}else
if($brand>0)
{
$sql = "SELECT * FROM Mobile where  Brandnumber=$brand  ORDER BY `Score` DESC ";
}
}
if($sort==1)
{
if($price>0)
{
if($brand>0)
{
$sql = "SELECT * FROM Mobile where Pricerange=$price AND Brandnumber=$brand ORDER BY `Score` Asc ";
}else
{
$sql = "SELECT * FROM Mobile where Pricerange=$price  ORDER BY `Score` Asc ";
}

}else
if($brand>0)
{
$sql = "SELECT * FROM Mobile where  Brandnumber=$brand  ORDER BY `Score` Asc ";
}
}

if($sort==2)
{
if($price>0)
{
if($brand>0)
{
$sql = "SELECT * FROM Mobile where Pricerange=$price AND Brandnumber=$brand  ORDER BY `Price` Asc ";
}else
{
$sql = "SELECT * FROM Mobile where Pricerange=$price  ORDER BY `Price` Asc ";
}

}else
if($brand>0)
{
$sql = "SELECT * FROM Mobile where  Brandnumber=$brand  ORDER BY `Price` Asc ";
}
}

if($sort==3)
{
if($price>0)
{
if($brand>0)
{
$sql = "SELECT * FROM Mobile where Pricerange=$price AND Brandnumber=$brand ORDER BY `Price` DESC  ";
}else
{
$sql = "SELECT * FROM Mobile where Pricerange=$price  ORDER BY `Price` DESC  ";
}

}else
if($brand>0)
{
$sql = "SELECT * FROM Mobile where  Brandnumber=$brand  ORDER BY `Price` DESC  ";
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
       

echo '<td width="350">';
echo '<center>';
echo '<h2><b><a href="mobiledisplay.php?id='.$customer['Id'].'"><button class="button button4 "><font color="#FFE1FF" size="3"> '.$customer['Name'].'</button></font></b></h2>';


echo ' <h1><img src='.$customer['Imageurl'].' width="120" height="160" /></h1> ';


echo '<h2><b> <button class="button "><font size="2"><b>'.$customer['Ram'].'</font></b></button></h2>';
echo '<h3><b><button class="button button2"> <font color="black" size="3">Price:  &#8377;<strike >('.$customer['Real'].')</strike>&nbsp;<font color="#FF0027" >'.$customer['Price'].'</font>&nbsp; </font></b></button></h3>';
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
