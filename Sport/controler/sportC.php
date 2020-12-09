<?php
include_once "../configS.php";

class sportC {
/*
    public function addcoach($album)
    {
 
     $sql="insert into album (titre,prix,image) values (:titre,:prix,:image)";
 
 
     $db=config::getConnexion();
     $query=$db->prepare($sql);
     $query->execute([
      
     
     'titre' =>$album->gettitre(),
     'prix' =>$album->getprix(),
     'image' =>$album->getimage()
     ]);
     
 
 
    }
*/

    public function addtalent($talent)
    {
 
     $sql="insert into talent (nom,prenom,age) values (:nom,:prenom,:age)";
 
 
     $db=config::getConnexion();
     $query=$db->prepare($sql);
     $query->execute([
      
     
     'nom' =>$talent->getnom(),
     'prenom' =>$talent->getprenom(),
     'age' =>$talent->getage()
     ]);
     
 
 
    }


    public function cherchetalent($nom,$prenom){
        $sql="SELECT * FROM talent where nom='$nom' and prenom='$prenom'";
        $db=Config::getConnexion();
        try{
            
            $result = $db->prepare($sql);
            $result->execute();
            
            return $result;
            
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }


    public function showtalent(){
        $sql="SELECT * FROM talent";
        $db=Config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    public function rechercheproduit()
    {
        $sql="SELECT * FROM produit";
        $db=Config::getConnexion();
        try{
            $result = $db->query($sql);
            return $result;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	

    }


    public function rechercheproduitt($idp)
    {
        $sql="SELECT * FROM produit WHERE idp='$idp'";
        $db=Config::getConnexion();
        try{
            $result2 = $db->query($sql);
            return $result2;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	

    }


    public function addPANIER($panier)
   {

    $sql="insert into panier (idp,marquep,nomp,quantite,prixp,color1,taille1) values (:idp,:marquep,:nomp,:quantite,:prixp,:color1,:taille1)";



    $db=config::getConnexion();
    $query=$db->prepare($sql);
    $query->execute([
     
    
    'idp' =>$panier->getidp(),
    'marquep' =>$panier->getmarquep(),
    'nomp' =>$panier->getnomp(),
    'quantite' =>$panier->getquantite(),
    'prixp' =>$panier->getprixp(),
    'color1' =>$panier->getcolor1(),
    'taille1' =>$panier->gettaille1()
    

    ]);
    


   }


   public function affichepanier()
   {
       $sql="SELECT * FROM panier";
       $db=Config::getConnexion();
       try{
           $result = $db->query($sql);
           return $result;
       }
       catch (Exception $e){
           die('Erreur: '.$e->getMessage());
       }	

   }

   public function deletepanier($idpanier)
{
$db=config::getConnexion();
$query=$db->prepare("delete from panier where idpanier =:idpanier");
$query->execute([
 
    'idpanier' =>$idpanier

]);
}


public function updateproduit($produit,$idp)
{

$sql=" update produit  set quantitep=:quantitep where idp= :idp";


$db=config::getConnexion();
$query=$db->prepare($sql);
$query->execute([
 

'idp' =>$idp,
'quantitep' =>$produit->getquantitep()



]);

}


public function recherchehomme()
{


    $sql="SELECT * FROM produit where sexe='homme'";
        $db=Config::getConnexion();
        try{
            $result = $db->query($sql);
            return $result;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	

        

}
public function recherchehommet_shirt()
{


    $sql="SELECT * FROM produit  where sexe='homme'   ";
        $db=Config::getConnexion();
        try{
            $result = $db->query($sql);
            return $result;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	

        

}

public function recherchehommet_shirt2()
{


    $sql="SELECT * FROM categorie  where typep='t-shirt'";
        $db=Config::getConnexion();
        try{
            $result = $db->query($sql);
            return $result;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	

        

}


public function recherchefemme()
{


    $sql="SELECT * FROM produit where sexe='femme'";
        $db=Config::getConnexion();
        try{
            $result = $db->query($sql);
            return $result;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	

        

}

public function recherchefemmet_shirt()
{


    $sql="SELECT * FROM produit where sexe='femme' ";
        $db=Config::getConnexion();
        try{
            $result = $db->query($sql);
            return $result;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	

        

}


public function recherchet_shirt()
{


    $sql="SELECT * FROM produit where typep='t-shirt'";
        $db=Config::getConnexion();
        try{
            $result = $db->query($sql);
            return $result;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	



}

public function addproduit($produit)
{



 $sql="insert into produit (nomp,sexe,marquep,taille1,taille2,taille3,color1,color2,color3,color4,color5,color6,color7,color8,color9,prix,quantitep,imagep1,imagep2,imagep3) 
  values (:nomp,:sexe,:marquep,:taille1,:taille2,:taille3,:color1,:color2,:color3,:color4,:color5,:color6,:color7,:color8,:color9,:prix,:quantitep,:imagep1,:imagep2,:imagep3)";


 $db=config::getConnexion();
 $query=$db->prepare($sql);
 $query->execute([
  
    'nomp'=>$produit->getnomp(),
    'sexe'=>$produit->getsexe(),
    'marquep'=>$produit->getmarquep(),
    'taille1'=>$produit->gettaille1(),
    'taille2'=>$produit->gettaille2(),
    'taille3'=>$produit->gettaille3(),
    'color1'=>$produit->getcolor1(),
    'color2'=>$produit->getcolor2(),
    'color3'=>$produit->getcolor3(),
    'color4'=>$produit->getcolor4(),
    'color5'=>$produit->getcolor5(),
    'color6'=>$produit->getcolor6(),
    'color7'=>$produit->getcolor7(),
    'color8'=>$produit->getcolor8(),
    'color9'=>$produit->getcolor9(),
    'prix'=>$produit->getprix(),
    'quantitep'=>$produit->getquantitep(),
    'imagep1'=>$produit->getimagep1(),
    'imagep2'=>$produit->getimagep2(),
    'imagep3'=>$produit->getimagep3()

 ]);
 

}

public function addcategorie($categorie)
{
    $sql="insert into categorie (typep) values(:typep)";
    
    $db=config::getConnexion();
    $query=$db->prepare($sql);
    $query->execute([

      'typep'=>$categorie->gettype()
      
       
    ]);     

}





public function showproduit()
{
    $sql="SELECT * FROM produit ";
    $db=Config::getConnexion();
    try{
        $result = $db->query($sql);
        return $result;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	

}

public function showcategorie()
{
    $sql="SELECT * FROM categorie";
    $db=Config::getConnexion();

    try{
        $result = $db->query($sql);
        return $result;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	

}



public function showproduit2($idp)
{
    $sql="SELECT * FROM produit where idp=$idp";
    $db=Config::getConnexion();
    try{
        $result = $db->query($sql);
        return $result;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	

}


public function showpcategorie2($idp)
{
    $sql="SELECT * FROM categorie where idp=$idp";
    $db=Config::getConnexion();
    try{
        $result = $db->query($sql);
        return $result;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }	

}

public function updateproduit2($produit,$idp)
{


    $sql=" update produit  set   nomp=:nomp, sexe=:sexe,marquep=:marquep,taille1=:taille1,taille2=:taille2,taille3=:taille3,color1=:color1,color2=:color2,color3=:color3,color4=:color4,color5=:color5,color6=:color6,color7=:color7,color8=:color8,color9=:color9,prix=:prix,quantitep=:quantitep,imagep1=:imagep1,imagep2=:imagep2,imagep3=:imagep3 where idp= :idp";


    $db=config::getConnexion();
    $query=$db->prepare($sql);
    $query->execute([
     
    
    'idp' =>$idp,
    'nomp'=>$produit->getnomp(),
    'sexe'=>$produit->getsexe(),
    'marquep'=>$produit->getmarquep(),
    'taille1'=>$produit->gettaille1(),
    'taille2'=>$produit->gettaille2(),
    'taille3'=>$produit->gettaille3(),
    'color1'=>$produit->getcolor1(),
    'color2'=>$produit->getcolor2(),
    'color3'=>$produit->getcolor3(),
    'color4'=>$produit->getcolor4(),
    'color5'=>$produit->getcolor5(),
    'color6'=>$produit->getcolor6(),
    'color7'=>$produit->getcolor7(),
    'color8'=>$produit->getcolor8(),
    'color9'=>$produit->getcolor9(),
    'prix'=>$produit->getprix(),
    'quantitep'=>$produit->getquantitep(),
    'imagep1'=>$produit->getimagep1(),
    'imagep2'=>$produit->getimagep2(),
    'imagep3'=>$produit->getimagep3(),


 
 
    
    
    ]);

}


public function updatecategorie2($produit,$idp)
{

$sql=" update categorie  set typep= :typep where idp= :idp";


$db=config::getConnexion();
$query=$db->prepare($sql);
$query->execute([
 

'idp' =>$idp,
'typep' =>$produit->gettype()


]);

}



public function deleteproduit($idp)
{
$db=config::getConnexion();
$query=$db->prepare("delete from produit where idp =:idp");
$query->execute([
 
    'idp' =>$idp

]);


}

/*
    public function addclient($album)
    {
 
     $sql="insert into album (titre,prix,image) values (:titre,:prix,:image)";
 
 
     $db=config::getConnexion();
     $query=$db->prepare($sql);
     $query->execute([
      
     
     'titre' =>$album->gettitre(),
     'prix' =>$album->getprix(),
     'image' =>$album->getimage()
     ]);
     
 
 
    }

*/
}