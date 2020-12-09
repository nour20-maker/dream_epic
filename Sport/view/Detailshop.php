<?php
session_start();

include_once "../controler/sportC.php";

include_once "../model/produit.php";


include_once "../model/addpanier.php";

include_once "../model/modproduit.php";


$produit= new sportC();


$x;
$y;
$z;
$w;

$result=$produit->rechercheproduit();

$result2=$produit->rechercheproduitt($_SESSION['idp']);

$x=".php";








if(isset($_POST['cherche']))
{

   


    $y=$_POST['find'];
    
if(isset($_POST['find']))
{
    
    foreach($result as $produit)
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



if(isset($_POST['ajouter']))
{
   

 /*
    if(isset($_SESSION['cart']))
    {
        $item_array_id=array_column($_SESSION['cart'],'produit_id');

       print_r($item_array_id);
    }
    else
    {

echo "not";
$item_array=array('produit_id'=>$_POST['cart']);

$_SESSION['cart'][0]=$item_array;


    }*/

if(isset($_POST['idp'])&& isset($_POST['marquep']) && isset($_POST['nomp']) && isset($_POST['prix']) && isset($_POST['quantitep']) && isset($_POST['color1']) &&isset($_POST['taille']))
{ 
   
    foreach($result2 as $produit)
    {
    $x=$produit['quantitep']-$_POST['quantitep'];
    if($produit['quantitep']>0)
    {
        $z=1;
        if($x>=0)
        {
            $w=1;
        }
        else if($x<0)
        {
            $w=2;
        }
      
       
    }
    else if($produit['quantitep']==0)
    {
        $z=2;
        
    }

    

if($z==1 && $w==1)
{
    $y=1;
    echo"tnjm tichri";
    $produite=new sportC();
    $PP=new produit3($x);
    $produite->updateproduit($PP,$_SESSION["idp"]);


$panier= new panier($_POST['idp'],$_POST['marquep'], $_POST['nomp'],$_POST['quantitep'],$_POST['prix'],$_POST['color1'],$_POST['taille']);
$P= new sportC();
$P->addpanier($panier);
}
if($z==2){$y=2;echo"tnjmch tichri stock wfe";}

 if($y==1)
{

if($w==2){echo"matnjm tzid ken"; echo $produit['quantitep']; echo"wala akal ";}

}

}

}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <td>
    <button><a href="shop.php">Retour</a></button>
  <h3  align="center"><button><a href="panier.php">Panier</a></button></h3>
    </td>

   
</head>
<body style="background-color:silver;">

<h5 align="end">
<form action="Detailshop.php" method="POST">
<input type="text" name="find" placeholder="Rechercher..."> <input type="submit" name="cherche" value="Rechercher" > 
</form></h5>

<?php
foreach($result2 as $produit)
{
 
?>   
<h1><?php  echo $produit["nomp"]?></h1>



<?php if(isset($_SESSION['sexe']))
{ if($_SESSION['sexe']=='femme'){?>
<h5 ><a href="homme.php" style="color:gold">HOMME</a> | <a href="femme.php" style="color:white">FEMME</a></h5>
<h5 ><a href="t-shirt.php" style="color:gold">T-SHIRTS</a></h5>
<h5 ><a href="short.php" style="color:gold">SHORTS</a></h5>
<h5 ><a href="gilets" style="color:gold">GILETS</a></h5>
<?php } else{?>
<h5 ><a href="homme.php" style="color:white">HOMME</a> | <a href="femme.php" style="color:gold">FEMME</a></h5>
<h5 ><a href="t-shirt.php" style="color:gold">T-SHIRTS</a></h5>
<h5 ><a href="short.php" style="color:gold">SHORTS</a></h5>
<h5 ><a href="gilets" style="color:gold">GILETS</a></h5>
<?php }} ?>

<h5 align="center"><table>



<form action="Detailshop.php?action=add&idp=<?php echo $produit['idp'];?>" method="POST">
<table align="center">
<tr>
<td><img src="https://www.cdiscount.com/pdt2/4/6/4/1/700x700/mp02635464/rw/t-shirt-noir-100-coton-mixte-homme-femme-sc221-10.jpg"alt="image1"  height="200" width="300"></td>
</tr>

<tr>
    <td></td>
<td>marque:   <?php  echo $produit["marquep"]?></td>
</tr>
<tr>
<td><?php  echo $produit["nomp"]?></td>
<td>taille:</td>
<td rowspan='1'>
						<input type="checkbox" id="S" name="taille" value="S">
                        
                        <label for="rnb">S</label>
						<input type="checkbox" id="M" name="taille" value="M">
                        
                        <label for="soul">M</label>
						<input type="checkbox" id="L" name="taille" value="L">
                        
                        <label for="jazz">L</label>
						</td>
</tr>
<tr>
    <td></td>
<td>couleur:</td>
<td>
    <input type="checkbox" id="color1" name="color1" value="<?php  echo $produit["color1"]?>">
<?php  echo $produit["color1"]?>


    <input type="checkbox" id="color1" name="color1" value="<?php  echo $produit["color2"]?>">
<?php  echo $produit["color2"]?>


    <input type="checkbox" id="color1" name="color1" value="<?php  echo $produit["color1"]?>">
<?php  echo $produit["color3"]?></td>    

</tr>
<tr>
<td></td>
<td>Quantite:  <td><input type="number" name="quantitep"  ></td>
</tr>

<tr>
    <td>
        <?php  echo $produit["prix"]?>DT</td>
    </tr>


<tr>
<td><input type="submit" name="ajouter" value="Ajouter au panier">
<input type="hidden" value="<?php  echo $produit['idp']; ?>" name="idp">
<input type="hidden" value="<?php  echo $produit['marquep']; ?>" name="marquep">
<input type="hidden" value="<?php  echo $produit['nomp']; ?>" name="nomp">
<input type="hidden" value="<?php  echo $produit['prix']; ?>" name="prix">


<?php if(isset($_POST['S'])) 
{
?>
<input type="hidden" value="<?php  echo $_POST['quantitep']; ?>" name="quantitep">
<?php if(isset($_POST['quantitep'])) 
{
?>
<input type="hidden" value="<?php  echo $_POST['quantitep']; ?>" name="quantitep">
<?php
}
?>
<input type="hidden" value="S" name="taille">
<?php
}
?>

<?php if(isset($_POST['M'])) 
{
?>
<input type="hidden" value="M" name="taille">
<?php
}
?>

<?php if(isset($_POST['L'])) 
{
?>
<input type="hidden" value="L" name="taille">

<?php
}
?>

<?php if(isset($_POST['color1'])) 
{
?>
<input type="hidden" value="<?php  echo $produit["color1"]?>" name="color1">

<?php
}
?>
</td>

</tr>

<?php

} 
?>

</table>

<h5>







</form>

</body>

</html>