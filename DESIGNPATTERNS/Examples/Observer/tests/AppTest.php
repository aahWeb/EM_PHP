<?php 

use PHPUnit\Framework\TestCase; // Le framework de tests 
use Observer\{Log as LogObserver, User as UserSubjet} ; 

class AppTest extends TestCase{

    protected $log;
    protected $user;

    public function setUp():void{
        $this->log = new LogObserver;
        $this->user = new UserSubjet;

        $this->user->attach( $this->log ) ;
    }

    public function testAddUser(){
        $this->user->create(name : "Alan", email : "alan@alan.fr");

        // test l'id
        $this->assertTrue( $this->log->getId()  != "");
    }
}