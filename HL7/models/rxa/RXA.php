<?php

$currentDir = getcwd();
require_once $currentDir.'/application/libraries/interfaces/HL7RXAInterface.php';
require_once $currentDir.'/application/libraries/interfaces/models/ce/CE.php';
require_once $currentDir.'/application/libraries/interfaces/models/xcn/XCN.php';

class RXA implements HL7RXAInterface
{
        protected $_rxa;

    public function __construct($rxa = null)
    {
        $this->_rxa = $rxa;
    }
    public function getStartTime()
    {
        return (string) $this->_rxa->{'RXA.3'}->{'RXA.3.1'};
    }
    public function getEndTime()
    {
        return (string) $this->_rxa->{'RXA.4'}->{'RXA.4.1'};
    }
    public function getCode()
    {
        $codeElement = new CE($this->_rxa->{'RXA.5'}, 'RXA.5');

        return $codeElement;
    }
    public function getDose()
    {
        return (string) $this->_rxa->{'RXA.6'}->{'RXA.6.1'}.' '.
            $this->_rxa->{'RXA.7'}->{'RXA.7.1'}.' '.$this->_rxa->{'RXA.8'}->{'RXA.8.1'};
    }
    public function getAdministeringProvider()
    {
        $name = new XCN($this->_rxa->{'RXA.10'}, 'RXA.10');

        return $name;
    }
    public function getAdministeredAtLocation()
    {
        return (string) $this->_rxa->{'RXA.11'}->{'RXA.11.1'};
    }
    public function getLotNumber()
    {
        return (string) $this->_rxa->{'RXA.15'}->{'RXA.15.1'};
    }
    public function getManufacturer()
    {
        return (string) $this->_rxa->{'RXA.17'}->{'RXA.17.1'};
    }
    public function getStatusCode()
    {
        $codeElement = new CE($this->_rxa->{'RXA.20'}, 'RXA.20');

        return $codeElement;
    }
    public function getId()
    {
        return (string) $this->_rxa->{'RXA.25'}->{'RXA.25.1'};
    }
}
