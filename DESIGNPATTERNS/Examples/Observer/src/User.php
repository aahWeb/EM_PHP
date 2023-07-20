<?php 

namespace Observer;
use SplSubject, SplObserver;

class User implements SplSubject{

private $id;

public function attach(SplObserver $observer) {
    $this->observers[] = $observer;
}

public function detach(SplObserver $observer){}

public function notify() {

    foreach ($this->observers as $value) {
        $value->update($this); // passe l'objet User à l'objet Observer
    }
}

public function create(string $name, string $email):void {

    $this->id = uniqid(true);
    $this->notify();
}

public function getId(){
    return $this->id;
}
}