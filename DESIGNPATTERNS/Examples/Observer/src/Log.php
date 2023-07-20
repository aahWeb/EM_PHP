<?php

namespace Observer;
use SplObserver, SplSubject ;

class Log implements SplObserver{

    private $id;

    public function update( SplSubject $subject) {
        $this-> id = $subject->getId();
    }

    public function getId():string  {
        return $this->id;
    }
}