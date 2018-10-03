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
        if ($this->ballsLeft > 0) {
            $this->ballsLeft--;
            $returnVal = true;
        }
        return $returnVal;
    }

    public function sellMultiItems($n) {
        $returnVal = false;
        if ( $this->ballsLeft >= $n ) {
            $this->ballsLeft -= $n;
            $returnVal = true;
        }
        return $returnVal;
    }    
    public function getStockLevel() {
        return $this->ballsLeft;
    }

    public function __toString() {
        $s = '';
        $s .= sprintf("        <tr><td>%s</td>"
                . "<td>%s</td>"
                . "<td><img src='getImage.php?color=%s&amp;dimples=%s' width='320' height='240'/></td>"
                . "<td>%s</td></tr>\n"
                , $this->getColor()
                , $this->getDimples()
                , $this->getColor()
                , $this->getDimples()
                , $this->getStockLevel());
        return $s;
    }
}