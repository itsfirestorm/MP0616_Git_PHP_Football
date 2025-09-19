<?php

namespace WorldCup;

require_once __DIR__ . "/Person.php";
class Coach extends Person {
    private $style; 

    public function train() {
        echo "train<br>";
    }

    /**
     * Get the style
     */
    public function getStyle() {
        return $this->style;
    }

    /**
     * Set the style
     */
    public function setStyle($style) {
        $this->style = $style;
    }
}
