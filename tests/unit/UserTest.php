<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    //
    public function testThatWeCanGetTheFirstName(){
        
        //
        $user = new \App\Models\User;

        $user->setFirstName('Sabbir');

        $this->assertEquals($user->getFirstName(), 'Sabbir');

    }


    public function testThatWeCanGetTheLastName(){
        
        //
        $user = new \App\Models\User;

        $user->setLastName('Ahmed');

        $this->assertEquals($user->getLastName(), 'Ahmed');

    }
}
