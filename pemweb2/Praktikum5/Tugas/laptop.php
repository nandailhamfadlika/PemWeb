<?php

class Laptop{
    private $merk;
    private $processor;
    private $ram;
    private $rom;

    public function __construct($merk,$processor,$ram,$rom)
    {
        $this->merk = $merk;
        $this->processor = $processor;
        $this->ram = $ram;
        $this->rom = $rom;
    }

    public function getmerk(){
        return $this->merk;
    }
    
    public function getprocessor(){
        return $this->processor;
    }

    public function getram(){
        return $this->ram;
    }

    public function getrom(){
        return $this->rom;
    }

    
}

?>