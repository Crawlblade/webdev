<?php
class Golfball implements Sellable {
    private $indents;
    private $color;
    private $ballsLeft;

    public function getIndents() {
        return $this->indents;
    }
    
    public function setIndents( $indents ) {
        $this->indents = $indents;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor ( $color ) {
        $this->color = $color;
    }
    
    public function addStock( $numItems ) {
        $this->ballsLeft += $numItems;
    }
    
    public function sellItem() {
        $returnVal = false;
        if ( $this->ballsLeft > 0 ) {
            $this->ballsLeft--;
            $returnVal = true;
        }
        else if ($returnVal == false) {
            printf("There are no more golfballs in stock. Sorry!\n");
        }

        return $returnVal;
    }
    
    public function getStockLevel() {
        return $this->ballsLeft;
    }
}