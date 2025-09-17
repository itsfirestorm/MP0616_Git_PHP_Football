<?php

namespace WorldCup;

require_once __DIR__ . "/Player.php";

class Defender extends Player {
    public $mark;

    public function __construct($team) {
        parent::__construct($this->setPosition("Defender"), $team);
    }

    public function steal(Ball $ball) {
        $effects = ["with fault. ", "without fault. "];
        $effect = $effects[array_rand($effects)];
        echo "Steals the ball $effect<br>";
    }

    /**
     * Get the mark
     */
    public function isMark() {
        return $this->mark;
    }

    /**
     * Set the mark
     */
    public function setMark($mark) {
        $this->mark = $mark;
    }
}
