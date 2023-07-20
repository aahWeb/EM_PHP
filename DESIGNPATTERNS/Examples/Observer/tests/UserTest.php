<?php 

use PHPUnit\Framework\TestCase; // Le framework de tests 
use Observer\{Log, User, Counter} ; 

class UserTest extends TestCase{

    protected Log $log;
    protected User $user;
    protected Counter $counter;

    public function setUp():void{
        $this->log = new Log;
        $this->user = new User;
        $this->counter = new Counter;
        $this->user->attach($this->log);
        $this->user->attach($this->counter);
    }

    public function testAddUser(){
        // test l'id
        $this->user->create( email : "alan@alan.fr", name : "alan",);
        $this->assertTrue( $this->log->getId()  !== "");
    }

    public function testCountUser(){
        // test l'id
        $this->user->create( email : "alan@alan.fr", name : "alan",);
        $this->user->create( email : "sophie@sophie.fr", name : "sophie",);
        $this->assertEquals(2, $this->counter->count());
    }
}