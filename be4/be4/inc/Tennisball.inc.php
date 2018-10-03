<?php
/**
 * Description of TennisBall
 * @author nml
 * example from textbook, Doyle, 2010
 */
class TennisBall implements Sellable {
    private $color;
    private $ballsLeft;

    public function getColor() {
        return $this->color;
    }
    
    public function setColor( $color ) {
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
        return $returnVal;
    }
    
    public function getStockLevel() {
        return $this->ballsLeft;
    }
}