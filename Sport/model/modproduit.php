<?php

class produit3
{
    private  $quantitep;    

public function __construct($quantitep)
{
 
    $this->quantitep=$quantitep;
    


}

public function setquantitep($quantitep)
{

    $this->quantitep=$quantitep;

}

public function getquantitep()
{

   return  $this->quantitep;

}

}

?>