<?php

$currentDir = getcwd();
require_once($currentDir.'/application/libraries/interfaces/HL7PR1Interface.php');
require_once($currentDir.'/application/libraries/interfaces/models/xpn/XPN.php');
require_once($currentDir.'/application/libraries/interfaces/models/xad/XAD.php');
require_once($currentDir.'/application/libraries/interfaces/models/ce/CE.php');

class PR1 implements HL7PR1Interface
{

    private $_procedure;

    public function __construct($procedure = null)
    {
        if ( isset($procedure)) {
            $this->_procedure = $procedure;
        }
    }

    public function getSetId()
    {
        return (string) $this->_procedure->{'PR1.1'}->{'PR1.1.1'};
    }

    public function getCodeMethod()
    {
        return (string) $this->_procedure->{'PR1.2'}->{'PR1.2.1'};
    }

    public function getCode()
    {
        $codeElement = new CE($this->_procedure->{'PR1.3'}, 'PR1.3');
        return $codeElement;
    }

    public function getDescription()
    {
        return (string) $this->_procedure->{'PR1.4'}->{'PR1.4.1'};
    }

    public function getProcedureDateTime()
    {
     return (string) $this->_procedure->{'PR1.5'}->{'PR1.5.1'};
    }

    public function getFunctionalType()
    {
        return (string) $this->_procedure->{'PR1.6'}->{'PR1.6.1'};
    }

    public function getProcedureMinutes()
    {
      return (string) $this->_procedure->{'PR1.7'}->{'PR1.7.1'};
    }

    public function getAnesthesiologist()
    {
        $name = new XCN($this->_procedure->{'PR1.8'}, 'PR1.8');
        return $name;
    }

    public function getAnesthesiaCode()
    {
      return (string) $this->_procedure->{'PR1.9'}->{'PR1.9.1'};
    }

    public function getAnesthesiaMinutes()
    {
        return (string) $this->_procedure->{'PR1.10'}->{'PR1.10'}; 
    }

    public function getSurgeon()
    {
        $name = new XCN($this->_procedure->{'PR1.11'}, 'PR1.11');
        return $name;
    }

    public function getProcedurePractitioner()
    {
        $name = new XCN($this->_procedure->{'PR1.12'}, 'PR1.12');
        return $name;
    }

    public function getConsentCode()
    {
        return (string) $this->_procedure->{'PR1.13'}->{'PR1.13'};
    }

    public function getProcedurePriority()
    {
        return (string) $this->_procedure->{'PR1.14'}->{'PR1.14'};
    }

    public function getAssociatedDiagnosisCode()
    {
        return (string) $this->_procedure->{'PR1.15'}->{'PR1.15'};
    }
}