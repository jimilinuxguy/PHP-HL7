<?php
$currentDir = getcwd();
require_once($currentDir.'/application/libraries/interfaces/HL7ORCInterface.php');

class ORC implements HL7ORCInterface
{

    protected $_orc;

    public function __construct($orc = null) 
    {
        $this->_orc = $orc;
    }
    public function getOrderControl()
    {
        return (string) $this->_orc->{'ORC.1'}->{'ORC.1.1'};
    }
    public function getPlacerOrderNumber()
    {
        $codeElement = new CE($this->_orc->{'ORC.2'}, 'ORC.2');
        return $codeElement;
    }
    public function getFillerOrderNumber() 
    {
        $codeElement = new CE($this->_orc->{'ORC.3'}, 'ORC.3');
        return $codeElement;
    }

    public function getPlacerGroupNumber()
    {
        return (string) $this->_orc->{'ORC.4'}->{'ORC.4.1'};
    } 

    public function getOrderStatus()
    {
        return (string) $this->_orc->{'ORC.5'}->{'ORC.5.1'};
    } 
    public function getResponseFlag()
    {
        return (string) $this->_orc->{'ORC.6'}->{'ORC.6.1'};
    } 
    public function getQuantityTiming()
    {
        return (string) $this->_orc->{'ORC.7'}->{'ORC.7.1'};
    } 
    public function getParent()
    {

    }
    public function getDateTimeTransaction()
    {

    }
    public function getEnteredBy()
    {
        $named = new XCN($this->_orc->{'ORC.10'}, 'ORC.10');
        return $named;
    }
    public function getVerifiedBy()
    {
        $named = new XCN($this->_orc->{'ORC.11'}, 'ORC.11');
        return $named;
    } 

    public function getOrderingProvider()
    {
        $named = new XCN($this->_orc->{'ORC.12'}, 'ORC.12');
        return $named;
    }

    public function getEntererLocation()
    {
        $location = new Location($this->_orc->{'ORC.13'}, 'ORC.13');
        return $location;
    } 
    public function getCallBackPhoneNumber()
    {
        return (string) $this->_orc->{'ORC.14'}->{'ORC.14.1'};
    }

    public function getEffectiveDateTime()
    {
        return (string) $this->_orc->{'ORC.15'}->{'ORC.15.1'};
    }  
    public function getOrderControlCodeReason()
    {
        $codeElement = new CE($this->_orc->{'ORC.16'}, 'ORC.16');
        return $codeElement;
    } 

    public function getEnteringOrganization()
    {
        $codeElement = new CE($this->_orc->{'ORC.17'}, 'ORC.17');
        return $codeElement;
    }
    public function getEnteringDevice()
    {
        $codeElement = new CE($this->_orc->{'ORC.18'}, 'ORC.18');
        return $codeElement;
    } 
    public function getActionBy()
    {
        $named = new XCN($this->_orc->{'ORC.19'}, 'ORC.19');
        return $named;
    }

}