<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    //
    public function testThatWeCanGetTheFirstName()
    {
        
        //
        $user = new \App\Models\User;

        $user->setFirstName('Sabbir');

        $this->assertEquals($user->getFirstName(), 'Sabbir');

    }


    public function testThatWeCanGetTheLastName()
    {
        
        //
        $user = new \App\Models\User;

        $user->setLastName('Ahmed');

        $this->assertEquals($user->getLastName(), 'Ahmed');

    }


    public function testFullNameIsReturened()
    {
        $user = new \App\Models\User;

        $user->setFirstName('Sabbir');
        $user->setLastName('Ahmed');

        $this->assertEquals($user->getFullName(), 'Sabbir Ahmed');
    }


    public function testFirstAndLastNameAreTrimmed()
    {
        $user = new \App\Models\User;

        $user->setFirstName('Sabbir    ');

        $user->setLastName('      Ahmed');

        $this->assertEquals($user->getFirstName(), 'Sabbir');
        $this->assertEquals($user->getLastName(), 'Ahmed');


    }

    public function testEmailAddressCanBeSet()
    {

        $user = new \App\Models\User;
        $user->setEmail('sabbir2cse@gmail.com');

        $this->assertEquals($user->getEmail(), 'sabbir2cse@gmail.com');

    }
}
