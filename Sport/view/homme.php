<?php
session_start();

include_once "../controler/sportC.php";
include_once "../model/produit.php";




$produit= new sportC();

$homme=$produit->recherchehomme();

$x=".php";



if(isset($_POST['cherche']))
{

   


    $y=$_POST['find'];
    
if(isset($_POST['find']))
{
    $_SESSION['sexe']=$_POST['sexe'];
    foreach($homme as $produit)
{
 if($_POST['find']==$produit['typep'])
 {
    $w= $y . $x;
     echo"mawjoud"; 
header("location:$w");

 }

}

}

}

if(isset($_GET['detail']))
{
    echo" hhhh111";

    $_SESSION['idp']=$_GET['idp'];

    $_SESSION['sexe']=$_GET['sexe'];

    header("location:Detailshop.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <button><a href="connect.php">Acceuil</a></button>
    <button><a href="shop.php">shop</a></button>
    <h3  align="center"><button><a href="panier.php">Panier</a></button></h3>
    
   
</head>
<body style="background-color:silver;">
<h5 align="end">


<input type="text" name="find" placeholder="Rechercher..."> <input type="submit" name="cherche" value="Rechercher" > 
<input type="hidden" name="sexe" value="homme" >
</form></h5>

<h1>HOMME</h1>
<h5 ><a href="homme.php" style="color:white">HOMME</a> | <a href="femme.php" style="color:gold">FEMME</a></h5>


<h5><form name="form1" method="post" action="t-shirt.php">
<a href="#" onclick="document['form1'].submit()" style="color:gold">T-SHIRT</a>
<input type="hidden" name="sexe" value="homme">
</form></h5>

<h5><form name="form2" method="post" action="gilets.php">
<a href="#" onclick="document['form1'].submit()" style="color:gold">GILETS</a>
<input type="hidden" name="sexe" value="homme" >
</form></h5>

<h5><form name="form3" method="post" action="short.php">
<a href="#" onclick="document['form1'].submit()" style="color:gold">SHORT</a>
<input type="hidden" name="sexe" value="homme" >
</form></h5>


<h5 align="center"><table>


<?php
foreach($homme as $produit)
{

?>

<table align="center">
<tr>
<td><img src="<?php echo $produit['imagep1']?>"alt="image1"  height="200" width="300"></td>
</tr>

<tr>
<td><?php  echo $produit["nomp"]?></td>
<td><?php  echo $produit["idp"]?></td>
</tr>
<tr>
    <td>
        <?php  echo $produit["prix"]?>DT</td>
    </tr>



<tr>
<td>
<form action="homme.php" method="GET">
<input type="submit" name="detail" value="detail" >
<input type="hidden" value="<?php  echo $produit['idp']; ?>" name="idp">
<input type="hidden" value="homme" name="sexe">
</form>
</td>


<?php



} 
?>

</table>




<h5>

</body>

</html>