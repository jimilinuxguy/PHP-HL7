<?php

$currentDir = getcwd();
require_once($currentDir.'/application/libraries/interfaces/HL7CXInterface.php');

class CX implements HL7CXInterface
{

    private $_cx;
    private $_prefix = null;

    public function __construct($extendedCompositeId = null,$prefix = null) 
    {
        if ( isset($extendedCompositeId) ) {
            $this->_cx = $extendedCompositeId;
        }
        if ( isset($prefix)) {
            $this->_prefix = $prefix;
        }
    }

    public function getId()
    {
        return (string) $this->_cx->{$this->_prefix.'.1'};
    }

    public function getScope() 
    {
        return (string) $this->_cx->{$this->_prefix.'.4'};
    }

    public function getType() 
    {
        return (string) $this->_cx->{$this->_prefix.'.5'};
    }

    public function __toString()
    {
        return $this->getId() . ' ' . $this->getScope() . ' ' . $this->getType() ;
    }
}