<?php

namespace WorldCup;

/*
 * Class to define the Player
 */

class Player extends Person
{
    private $position;

    public function __construct($position)
    {
        $this->position = $position;
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
        echo "Player from " . $this->position . " passed the ball.";
    }
}
