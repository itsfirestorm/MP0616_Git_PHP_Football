<?php

namespace WorldCup;
use DateTime;

require_once __DIR__ . '/Ball.php';
require_once __DIR__ . '/Coach.php';
require_once __DIR__ . '/Defender.php';
require_once __DIR__ . '/Field.php';
require_once __DIR__ . '/Forward.php';
require_once __DIR__ . '/GoalKeeper.php';
require_once __DIR__ . '/Midfielder.php';
require_once __DIR__ . '/Team.php';

$game = new Game();
$game->main();

/**
 * Class to define the game
 */
class Game {
    public $field;
    public $date;
    public $ball;
    public $teams;

    public function getField() {
        return $this->field;
    }

    public function setField($field) {
        $this->field = $field;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function getBall() {
        return $this->ball;
    }

    public function setBall($ball) {
        $this->ball = $ball;
    }

    public function getTeams() {
        return $this->teams;
    }

    public function setTeams($teams) {
        $this->teams = $teams;
    }

    public function main() {
        echo "starting application <br>";
        
        $this->setField(new Field(100));
        $this->setDate(new DateTime());
        $this->setBall(new Ball());
        
        // create players team A
        $teamA = new Team("NewTeam");
        $listA = [];
        $listA[] = new Goalkeeper($teamA->getName());
        $listA[] = new Defender($teamA->getName());
        $listA[] = new Defender($teamA->getName());
        $listA[] = new Defender($teamA->getName());
        $listA[] = new Defender($teamA->getName());
        $listA[] = new Midfielder($teamA->getName());
        $listA[] = new Midfielder($teamA->getName());
        $listA[] = new Midfielder($teamA->getName());
        $listA[] = new Midfielder($teamA->getName());
        $listA[] = new Forward($teamA->getName());
        $listA[] = new Forward($teamA->getName());

        // create players team B
        $teamB = new Team("Maped");
        $listB = [];
        $listB[] = new Goalkeeper($teamB->getName());
        $listB[] = new Defender($teamB->getName());
        $listB[] = new Defender($teamB->getName());
        $listB[] = new Defender($teamB->getName());
        $listB[] = new Defender($teamB->getName());
        $listB[] = new Midfielder($teamB->getName());
        $listB[] = new Midfielder($teamB->getName());
        $listB[] = new Midfielder($teamB->getName());
        $listB[] = new Midfielder($teamB->getName());
        $listB[] = new Forward($teamB->getName());
        $listB[] = new Forward($teamB->getName());

        $teamA->setPlayers($listA);
        $teamA->setCoach(new Coach());

        $teamB->setPlayers($listB);
        $teamB->setCoach(new Coach());

        $teams = [];
        $teams[] = $teamA;
        $teams[] = $teamB;
        $this->setTeams($teams);

        $this->start();
    }


    public function start() {
        echo "starting match actions...<br>";

        for ($i = 0; $i < 10; $i++) {
            echo "<br>--- Action " . ($i + 1) . " ---<br>";

            // select random team
            $teamIndex = array_rand($this->teams);
            $selectedTeam = $this->teams[$teamIndex];
            echo "Team: " . $selectedTeam->getName() . "<br>";

            // select random player
            $players = $selectedTeam->getPlayers();
            $playerIndex = array_rand($players);
            $selectedPlayer = $players[$playerIndex];
            echo "Player type: " . (new \ReflectionClass($selectedPlayer))->getShortName() . "<br>";

            // common actions
            $selectedPlayer->run();
            $selectedPlayer->passBall();

            // specific actions
            if ($selectedPlayer instanceof Forward) {
                $selectedPlayer->drible();
                $selectedPlayer->kick($this->getBall());
            } else if ($selectedPlayer instanceof Midfielder) {
                $selectedPlayer->organize();
            } else if ($selectedPlayer instanceof Defender) {
                $selectedPlayer->steal($this->getBall());
            } else if ($selectedPlayer instanceof Goalkeeper) {
                $selectedPlayer->block($this->getBall());
            }
        }
    }
    
}
