
<?php

class produit
{   
private $nomp;
private $sexe;
private $marquep;

private $taille1;
private $taille2;
private $taille3;

private $color1;
private $color2;
private $color3;
private $color4;
private $color5;
private $color6;
private $color7;
private $color8;
private $color9;

private $prix;
private $quantitp;

private $imagep1;
private $imagep2;
private $imagep3;

public function __construct( $nomp, $sexe, $marquep, $taille1, $taille2,$taille3,$color1,$color2,$color3,$color4,$color5,$color6,$color7,$color8,$color9,$prix,$quantitp,$imagep1,$imagep2,$imagep3)
{

    $this->nomp=$nomp;
    $this->sexe=$sexe;
    $this->marquep=$marquep;

    $this->taille1=$taille1;
    $this->taille2=$taille2;
    $this->taille3=$taille3;

    $this->color1=$color1;
    $this->color2=$color2;
    $this->color3=$color3;
    $this->color4=$color3;
    $this->color5=$color5;
    $this->color6=$color6;
    $this->color7=$color7;
    $this->color8=$color8;
    $this->color9=$color9;

    $this->prix=$prix;

    $this->quantitp=$quantitp;

    $this->imagep1=$imagep1;
    $this->imagep2=$imagep2;
    $this->imagep3=$imagep3;

    
   

}

public function setnomp($nomp)
{

    $this->nomp=$nomp;

}

public function getnomp()
{

   return  $this->nomp;

}


public function setsexe($sexe)
{
    $this->sexe=$sexe;
}

public function getsexe()
{
    return $this->sexe;

}


public function setmarquep($marquep)
{

    $this->marquep=$marquep;

}

public function getmarquep()
{

   return  $this->marquep;

}




public function settaille1($taille1)
{

    $this->taille=$taille1;

}

public function gettaille1()
{

   return  $this->taille1;

}


public function settaille2($taille3)
{

    $this->taille2=$taille2;

}

public function gettaille2()
{

   return  $this->taille2;

}



public function settaille3($taille3)
{

    $this->taille3=$taille3;

}

public function gettaille3()
{

   return  $this->taille3;

}



public function setcolor1($color1)
{

    $this->color1=$color1;

}

public function getcolor1()
{

   return  $this->color1;

}

public function setcolor2($color2)
{

    $this->color2=$color2;

}

public function getcolor2()
{

   return  $this->color2;

}


public function setcolor3($color3)
{

    $this->color3=$color3;

}

public function getcolor3()
{

   return  $this->color3;

}


public function setcolor4($color4)
{

    $this->color4=$color4;

}

public function getcolor4()
{

   return  $this->color4;

}



public function setcolor5($color5)
{

    $this->color5=$color5;

}

public function getcolor5()
{

   return  $this->color5;

}


public function setcolor6($color6)
{

    $this->color6=$color6;

}

public function getcolor6()
{

   return  $this->color6;

}



public function setcolor7($color7)
{

    $this->color7=$color7;

}

public function getcolor7()
{

   return  $this->color7;

}



public function setcolor8($color8)
{

    $this->color8=$color8;

}

public function getcolor8()
{

   return  $this->color8;

}


public function setcolor9($color9)
{

    $this->color9=$color9;

}

public function getcolor9()
{

   return  $this->color9;

}





public function setprix($prix)
{
    $this->prix=$prix;
}

public function getprix()
{
    return $this->prix;

}



public function setquantitep($quantitp)
{
    $this->quantitp=$quantitp;
}

public function getquantitep()
{
    return $this->quantitp;

}



public function setimagep1($imagep1)
{
    $this->imagep1=$imagep1;
}

public function getimagep1()
{
    return $this->imagep1;

}

public function setimagep2($imagep2)
{
    $this->imagep2=$imagep2;
}

public function getimagep2()
{
    return $this->imagep2;

}

public function setimagep3($imagep3)
{
    $this->imagep3=$imagep3;
}

public function getimagep3()
{
    return $this->imagep3;

}







}


class produit2
{
private $nomp;

public function __construct($nomp)
{

    $this->nomp=$nomp;

}
public function setnomp2($nomp)
{

    $this->nomp=$nomp;

}

public function getnomp2()
{

   return  $this->nomp;

}


}

class categorie
{

private $typep;

public function __construct($typep)
{

    $this->typep=$typep;

}

public function settype($typep)
{

    $this->typep=$typep;

}

public function gettype()
{

   return  $this->typep;

}

}
?>