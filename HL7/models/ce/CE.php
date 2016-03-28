<?php
$currentDir = getcwd();
require_once($currentDir.'/application/libraries/interfaces/HL7CEInterface.php');

class CE implements HL7CEInterface
{

    private $_ce;
    private $_prefix;

        public function __construct($codeElement = null, $prefix = null)
        {
            $this->_ce = $codeElement;
            $this->_prefix = $prefix;
        }

        public function getCode() 
        {
            return (string) $this->_ce->{$this->_prefix.'.1'};
        }

    public function getLabel() 
    {
        return (string) $this->_ce->{$this->_prefix.'.2'};
    }

    public function getCodeSystem() 
    {
        return (string) $this->_ce->{$this->_prefix.'.3'};
    }

    public function getAlternateCode() 
    {
    return (string) $this->_ce->{$this->_prefix.'.4'};
    }

    public function __toString() 
    {
        $string = $this->getLabel() . ' ' . 
                        $this->getCode() . ' ' . 
                        $this->getCodeSystem() . ' ' . 
                        $this->getAlternateCode();
        return $string;
    }
}