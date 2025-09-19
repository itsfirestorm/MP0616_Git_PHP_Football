<?php

namespace WorldCup;

/*
 * Class to define the Player
 */

require_once __DIR__ . "/Person.php";

class Player extends Person
{
    private $position;
    private $team;

    public function __construct($position, $team)
    {
        $this->position = $position;
        $this->team = $team;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($pos)
    {
        $this->position = $pos;
    }

    public function passBall()
    {
        echo "Player from " . $this->team . " passed the ball. ";
    }
}
