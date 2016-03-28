<?php
$currentDir = getcwd();
require($currentDir.'/application/libraries/interfaces/HL7XADInterface.php');

class XAD implements HL7XADInterface
{


    private $_address;
    private $_prefix;

    function __construct($address = null ,$prefix = null)
    {
        $this->_address = $address;
        $this->_prefix = $prefix;
    }

    function getStreet1()
    {
        return (string) $this->_address->{$this->_prefix.'.1'};
    }

    function getStreet2()
    {
        return (string) $this->_address->{$this->_prefix.'.2'};
    }

    function getLocality()
    {
        return (string) $this->_address->{$this->_prefix.'.3'};
    }

    function getRegion()
    {
        return (string) $this->_address->{$this->_prefix.'.4'};
    }

    function getPostal()
    {
        return (string) $this->_address->{$this->_prefix.'.5'};
    }

    function getCountryCode()
    {
        return (string) $this->_address->{$this->_prefix.'.6'};
    }

    function getCodeCode()
    {
        return (string) $this->_address->{$this->_prefix.'.7'};
    }

    public function __toString()
    {
        return (string) $this->getStreet1() . ' ' . 
                                $this->getStreet2() . ' ' . 
                                $this->getLocality() . ' ' . 
                                $this->getRegion() . ' ' . 
                                $this->getPostal() . ' ' . 
                                $this->getCountryCode();
    }
}