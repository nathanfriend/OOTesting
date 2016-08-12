<?php

Class Car {
    public $EngineState;
    public $Colour;
    
    public function Ignition($state) {
        switch ($state) {
            case 0:
                $this->EngineState[$name] = "Stoped.";
                break;
            case 1:
                $this->EngineState[$name] = "Running...";
                break;
            default :
                $this->EngineState[$name] = "Stoped...";
        }
        
    }
    
    public function checkEngine() {
        echo "Engine is: ".$this->EngineState[$name];
    }
}

Class Lorry extends Car {
    public $trailerSize;
    public $fuleType;
    public $randNumber;
    
    function __construct() {
        $this->randNumber =  rand(0,100);
    }
    
    public function setTrailerSize($size) {
        $this->trailerSize[$capacity] = $size;
    }
    
    public function checkTrailerSize() {
        echo "The Trailer size is: ".$this->trailerSize[$capacity];
    }
}


$ford = new Car();
$ford->Ignition(1);
$ford->checkEngine();

echo "\r\r\n\n";
$merc = new Lorry();
$merc->Ignition(1);
$merc->setTrailerSize(500);
$merc->checkEngine();
$merc->checkTrailerSize();


$merc2 = new Lorry();
$merc3 = new Lorry();
$merc4 = new Lorry();
print_r($merc2); 
print_r($merc3);
print_r($merc4);


?>



