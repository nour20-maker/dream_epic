<?php

include_once "../controler/sportC.php";
include_once "../model/produit.php";

session_start();

$panier= new sportC();

$result=$panier->affichepanier();

if(isset($_POST['Delete']))
{
$panier->deletepanier($_SESSION['idpanier']);
}

if($result->rowCount() == 0)
{

    echo"panier vaide";
   

}






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panier</title>
    <button><a href="Detailshop.php">Retour</a></button>
   
</head>

<body>
<h2>Panier:</h2>
<form action="panier.php" method="POST">
<?php
foreach($result as $panier)
{
?>
<table border="2">
<tr>
<td rowspan="2"><img src="https://www.cdiscount.com/pdt2/4/6/4/1/700x700/mp02635464/rw/t-shirt-noir-100-coton-mixte-homme-femme-sc221-10.jpg"alt="image1"  height="200" width="300"></td>
<td>Nom Produit:</td>
<td>Marque Produit:</td>
<td>Couleur Produit:</td>
<td>Taille Produit:</td>
<td> Quantite Produit:</td>
<td>Prix Produit:</td>
</tr>

<tr>
<td><?php echo $panier["nomp"] ?></td>
<td><?php echo $panier["marquep"] ?></td>
<td><?php echo $panier["color1"] ?></td>
<td><?php echo $panier["taille1"] ?></td>
<td><?php echo $panier["quantite"] ?></td>
<td><?php echo $panier["prixp"]?>DT</td>
<td><input type="button"  name="Delete" value="Delete" ></td>
<input type="hidden" value="<?php  echo $panier['idpanier']; ?>" name="idpanier">


<tr>

<td>

</td>

</tr>


</table>


<?php
$_SESSION['idpanier']=$panier['idpanier'];
}
?>
</form>
</body>

</html>