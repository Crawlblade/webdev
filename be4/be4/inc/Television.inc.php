<?php
/**
 * Description of Television
 * @author nml
 * example from textbook, Doyle, 2010
 */

class Television implements Sellable {
    private $screenSize;
    private $stockLevel;

    public function getScreenSize() {
        return $this->screenSize;
    }
    public function setScreenSize( $screenSize ) {
        $this->screenSize = $screenSize;
    }
    public function addStock( $numItems ) {
        $this->stockLevel += $numItems;
    }
    public function sellItem() {
        $returnVal = false;
        if ( $this->stockLevel > 0 ) {
            $this->stockLevel--;
            $returnVal = true;
        }
        return $returnVal;
    }
    public function getStockLevel() {
        return $this->stockLevel;
    }
}