<?php

namespace WorldCup;

/*
 * Class to define Persons
 */

class Person {
    private $age;

    public function setAge($newAge) {
        $this->age = $newAge;
    }

    public function getAge() {
        return $this->age;
    }

    public function run() {
        echo "running";
    }
}
?>