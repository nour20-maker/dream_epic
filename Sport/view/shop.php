<?php
session_start();

include_once "../controler/sportC.php";
include_once "../model/produit.php";





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <button><a href="connect.php">Acceuil</a></button>
    <h3  align="center"><button><a href="panier.php">Panier</a></button></h3>
    
   
</head>
<body style="background-color:silver;">

<h1>Shop</h1>

<table align="center">
<tr>
<td>
<form action="homme.php" method="POST">
<input type="image" src="man.png" onmouseover="this.src='man2.jpg'" onmouseout="this.src='man.png'" height="500" width="600">
</form>
</td>
<td>
<form action="femme.php" method="POST">
<input type="image" src="femme.png" onmouseover="this.src='femme2.png'" onmouseout="this.src='femme.png'" height="500" width="600">
</form>
</td>

</tr>
</table>



</body>

</html>
