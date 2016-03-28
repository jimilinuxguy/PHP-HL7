<?php
$currentDir = getcwd();
require_once($currentDir.'/application/libraries/interfaces/HL7XCNInterface.php');
require_once($currentDir.'/application/libraries/interfaces/models/xpn/XPN.php');

class XCN implements HL7XCNInterface
{

    private $_provider;
    private $_prefix;

    public function __construct($provider=null,$prefix=null)
    {
        $this->_provider = $provider;
        $this->_prefix = $prefix;
    }

    public function getProviderId()
    {
        $provider_id = (int) $this->_provider->{$this->_prefix.'.1'};
        $other_provider_id = (int) $this->_provider->{$this->_prefix.'.8'};
        if ( is_int($provider_id) && strlen($provider_id) == 10) {
            return $provider_id;            
        } else {
            return $other_provider_id;
        }
    }

    public function getLastName()
    {
        return (string) $this->_provider->{$this->_prefix.'.2'};
    }

    public function getFIrstName()
    {
        return (string) $this->_provider->{$this->_prefix.'.3'};
    }

    public function getMiddleName()
    {
        return (string) $this->_provider->{$this->_prefix.'.4'};
    }

    public function getSuffix()
    {
        return (string) $this->_provider->{$this->_prefix.'.5'};
    }

    public function getPrefix()
    {
        return (string) $this->_provider->{$this->_prefix.'.6'};
    }

    public function getDegree()
    {
        return (string) $this->_provider->{$this->_prefix.'.7'};
    }


    public function __toString()
    {
        $string = $this->getPrefix() . ' ' . 
                        $this->getFirstName() . ' ' . 
                        $this->getMiddleName() . ' ' . 
                        $this->getLastName() . ' ' . 
                        $this->getDegree() . ' ' . 
                        $this->getSuffix() ;
        return $string;
    }
}