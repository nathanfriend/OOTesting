<?php 
class CarTest extends PHPUnit_Framework_TestCase
{

    public function testIgnition()
    {
        // Arrange
        $ford = new Car();


        // Act
        $ford->Ignition(1);

        // Assert
        $this->assertEquals($ford->checkEngine(),1);
    }

}