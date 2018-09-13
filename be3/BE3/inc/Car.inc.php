<?php
/**
 * Description of Car
 * 
 * @author KJK
 */

 class Car extends Vehicle {
     protected $doors;
     protected $trailer;

     public function __construct($brand, $color, $name, $doors, $trailer) {
        parent::__construct($brand, $color, $name);
        $this->setType('car');
        $this->doors = $doors;
        $this->trailer = $trailer;

    }

    public function getTrailer(){
        $this->trailer;
        if ($this->trailer == TRUE){
            return sprintf("I have a trailer!");
        }
        else {
            return sprintf("I don't have a trailer!");
        }
    }
     
    public function getDoors(){
        return $this->doors;
    }

    public function __toString(){
        return sprintf("%s I have %s doors, %s And I'm a %s!\n"
                , parent::__toString()
                , $this->getDoors()
                , $this->getTrailer()
                , $this->getType());
    }

 }