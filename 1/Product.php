<?php
class Product implements ProductContract
{   
    public function __construct($Name, $Price) 
    {
        $this->Name = $Name;
        $this->Price = $Price;
    }
    public function getName()
    {
        return $this->Name;
    }
    public function getPrice()
    {
        return $this->Price;
    }
    public function getFormattedPrice()
    {
        return number_format ($this->Price, 2, ",", "") . ' €';
    }
    
    
}