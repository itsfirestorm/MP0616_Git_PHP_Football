<?php

namespace WorldCup;

/**
 * Class to define the forward
 */

require_once __DIR__ . "/Player.php";

class Forward extends Player {
    public $killer; 

    public function __construct($team) {
        parent::__construct($this->setPosition("Forward"), $team);
    }

    public function drible() {
        echo "Dribbling. ";
    }

    /**
     * Get the killer
     */
    public function isKiller() {
        return $this->killer;
    }

    /**
     * Set the mark
     */
    public function setKiller($killer) {
        $this->killer = $killer;
    }

    public function kick(Ball $ball) {
        $effects = [
            "with spin.",
            "too high.",
            "off target.",
            "straight to the keeper.",
            "into the top corner.",
            "with great power.",
            "weak shot.",
            "curled beautifully."
        ];

        $effect = $effects[array_rand($effects)];
        echo "Kicking $effect<br>";
    }
}
