<?php

namespace WorldCup;

class Defender extends Player {
    public $mark;

    public function __construct() {
        $this->setPosition("Defender");
    }

    public function steal(Ball $ball) {
        $effects = ["with fault", "without fault"];
        $effect = $effects[array_rand($effects)];
        echo "steals the ball $effect\n";
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
