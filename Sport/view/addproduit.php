<?php
session_start();

include_once "../controler/sportC.php";
include_once "../model/produit.php";
$x=0;
$a;
$b;
$c;
$d;
$e;
$f;
$g;
$h;
$i;

$j;
$k;
$l;

$m;
$n;
$o;

if(isset($_POST['typep'])&& isset($_POST['nomp'])&&isset($_POST['marquep'])&& isset($_POST['sexe'])&&isset($_POST['quantitep'])&&isset($_POST['prix'])||isset($_POST['taille1'])

||isset($_POST['taille2'])||isset($_POST['taille3'])||isset($_POST['color1'])||isset($_POST['color2'])||isset($_POST['color3'])||isset($_POST['color4'])||isset($_POST['color5'])||

isset($_POST['color6'])||isset($_POST['color7'])||isset($_POST['color8'])||isset($_POST['color9'])||isset($_POST['image1']))
{

    if(isset($_POST['color1']))
    {$a=$_POST['color1'];}
    else{$a="vide";}

    if(isset($_POST['color2']))
    {$b=$_POST['color2'];}
    else{$b="vide";}

    if(isset($_POST['color3']))
    {$c=$_POST['color3'];}
    else{$c="vide";}

    if(isset($_POST['color4']))
    {$d=$_POST['color4'];}
    else{$d="vide";} 

    if(isset($_POST['color5']))
    {$e=$_POST['color5'];}
    else{$e="vide";} 

    if(isset($_POST['color6']))
    {$f=$_POST['color6'];}
    else{$f="vide";}

    if(isset($_POST['color7']))
    {$g=$_POST['color7'];}
    else{$g="vide";}

    if(isset($_POST['color8']))
    {$h=$_POST['color8'];}
    else{$h="vide";}

    if(isset($_POST['color9']))
    {$i=$_POST['color9'];}
    else{$i="vide";}

    if(isset($_POST['taille1']))
    {$j=$_POST['taille1'];}
    else{$j="vide";}

    if(isset($_POST['taille2']))
    {$k=$_POST['taille2'];}
    else{$k="vide";}

    if(isset($_POST['taille3']))
    {$l=$_POST['taille3'];}
    else{$l="vide";}


    
    if(isset($_POST['image1']))
    {$m=$_POST['image1'];}
    else{$m="vide";}

    if(isset($_POST['image2']))
    {$n=$_POST['image2'];}
    else{$n="vide";}

    if(isset($_POST['image3']))
    {$o=$_POST['image3'];}
    else{$o="vide";}




    $produit= new produit($_POST['nomp'],$_POST['sexe'], $_POST['marquep'],$j,$k,$l,$a,$b,$c,$d,$e,$f,$g,$h,$i,$_POST['prix'],$_POST['quantitep'],$m,$n,$o);
    $P= new sportC();
    $P->addproduit($produit);   
   
/*
    $categorie= new categorie($_POST['typep']);
    $C=new sportC();
    $C->addcategorie($categorie,$produit);

 */
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <button><a href="connect.php">Acceuil</a></button>
    
    
   
</head>
<body style="background-color:silver;">


<h2 align="center"><a href="updateproduit.php">Produits</a></h2>

<h1>Ajouter Produit</h1>

<form action="addproduit.php" method="POST">
<table align="first">
<tr>
<td>Type Produit:</td><td><input type="text" name="typep" id="typep"></td>
</tr>
<tr>
<td>Nom Produit:</td><td><input type="text" name="nomp" id="nomp"></td>
</tr>
<tr>
<td>Marque Produit:</td><td><input type="text" name="marquep" id="marquep"></td>
</tr>

<tr>
<td>Sexe:</td><td><input type="radio" name="sexe" id="sexe" value="homme">Homme <input type="radio" name="sexe" id="sexe" value="femme">Femme</td>
</tr>

<tr>
<td>Taille:</td><td><input type="checkbox" name="taille1" id="taille1" value="S">S <input type="checkbox" name="taille2" id="taille2" value="M">M <input type="checkbox" name="taille3" id="taille3" value="L">L </td>
</tr>

<tr>
<td rowspan="3">Couleur Produit:</td><td>
<input type="checkbox" name="color1" id="color" value="rouge">Rouge 
<input type="checkbox" name="color2" id="color" value="blanc">Blanc 
<input type="checkbox" name="color3" id="color" value="noir">Noir

<input type="button" id="b1" onclick="hide()" value="Autres colors...">
</td>
</tr>



<tr>
<td>
<div id="h1">
<input type="checkbox" name="color4" id="color" value="bleu">Bleu
<input type="checkbox" name="color5" id="color" value="orange">Orange
<input type="checkbox" name="color6" id="color" value="violet">Violet
</div>
</td>
</tr>

<tr>
<td> 
<div id="h2"> 
<input type="checkbox" name="color7" id="color" value="jaune">Jaune
<input type="checkbox" name="color8" id="color" value="gris">Gris
<input type="checkbox" name="color9" id="color" value="vert">Vert
</div>
</td>
</tr>
<tr>
<td>Quantite Produit:</td><td><input type="number" name="quantitep" id="quantite"></td>
</tr>
<tr>
   <td>Prix Produit:</td><td><input type="number" name="prix" id="prix"></td> 
</tr>
<tr>
<td>Image Produit:</td><td><input type="file" name="image1" id="image" ></td> 
<td><input type="file" name="image2" id="image" ></td>
<td><input type="file" name="image3" id="image" ></td>
</tr>

<tr>

<td><input type="submit" name="submit" value="Ajouter Produit" ></td> 
</tr>


</table>
</form>

<script>
    var a; 
    var x=0;
    if(x==0)
    {
        document.getElementById("h1").style.display="none";
        document.getElementById("h2").style.display="none";
    }
function hide()
{
  x=1;

  if(x==1)
  {
if(a==1)
{
    document.getElementById("h2").style.display="inline";
document.getElementById("h1").style.display="inline";
return a=0;
}
else
{
    document.getElementById("h2").style.display="none";
    document.getElementById("h1").style.display="none";
    return a=1;

}

}

}

</script>

</body>

</html>