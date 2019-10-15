<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    protected $user;

    public function setUp(): void
    {
        $this->user = new \App\Models\User;
    }


    /** @test */
    public function that_we_can_get_the_first_name()
    {
        
       
        $this->user->setFirstName('Sabbir');

        $this->assertEquals($this->user->getFirstName(), 'Sabbir');

    }


    public function testThatWeCanGetTheLastName()
    {
        
        
        $this->user->setLastName('Ahmed');

        $this->assertEquals($this->user->getLastName(), 'Ahmed');

    }


    public function testFullNameIsReturened()
    {

        $this->user->setFirstName('Sabbir');
        $this->user->setLastName('Ahmed');

        $this->assertEquals($this->user->getFullName(), 'Sabbir Ahmed');
    }


    public function testFirstAndLastNameAreTrimmed()
    {

        $this->user->setFirstName('Sabbir    ');

        $this->user->setLastName('      Ahmed');

        $this->assertEquals($this->user->getFirstName(), 'Sabbir');
        $this->assertEquals($this->user->getLastName(), 'Ahmed');


    }

    public function testEmailAddressCanBeSet()
    {

        $this->user->setEmail('sabbir2cse@gmail.com');

        $this->assertEquals($this->user->getEmail(), 'sabbir2cse@gmail.com');

    }

    public function testEmailVariablesContainCorrectValues()
    {
        $this->user->setFirstName('Sabbir');
        $this->user->setLastName('Ahmed');
        $this->user->setEmail('sabbir2cse@gmail.com');

        $emailVariables = $this->user->getEmailVariables();

        $this->assertArrayHasKey('full_name', $emailVariables);
        $this->assertArrayHasKey('email', $emailVariables);

        $this->assertEquals($emailVariables['full_name'], 'Sabbir Ahmed');
        $this->assertEquals($emailVariables['email'], 'sabbir2cse@gmail.com');

    }
}
