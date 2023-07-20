<?php

namespace Observer;

use SplObserver, SplSubject;

class Counter implements SplObserver
{

    private $storage = [];

    public function update(SplSubject $subject)
    {
        $this->storage[] = $subject->getId();
    }

    public function count(): int
    {
        return count($this->storage);
    }
}