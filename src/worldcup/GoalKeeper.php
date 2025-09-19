<?php

namespace WorldCup;

/**
 * Class to define the goalkeeper
 */
require_once __DIR__ . "/Player.php";

class Goalkeeper extends Player {
    private $globes; // property declared without type, like in original
    private $position;

    public function __construct($team) {
        parent::__construct($this->setPosition("Goalkeeper"), $team);
    }

    /**
     * Get the globes
     */
    public function isGlobes() {
        return $this->globes;
    }

    /**
     * Set the globes
     */
    public function setGlobes($globes) {
        $this->globes = $globes;
    }

    public function block(Ball $ball) {
        $effects = ["with success.", "without success."];

        $effect = $effects[array_rand($effects)];

        echo "Catching $effect<br>";
    }
}
