<?php

$currentDir = getcwd();
require_once $currentDir.'/application/libraries/interfaces/HL7DG1Interface.php';
require_once $currentDir.'/application/libraries/interfaces/models/xcn/XCN.php';
require_once $currentDir.'/application/libraries/interfaces/models/xad/XAD.php';
require_once $currentDir.'/application/libraries/interfaces/models/ce/CE.php';

class DG1 implements HL7DG1Interface
{
    private $_diagnosis;

    public function __construct($diagnosis = null)
    {
        if (isset($diagnosis)) {
            $this->_diagnosis = $diagnosis;
        }
    }

    public function getCodeMethod()
    {
        return (string) $this->_diagnosis->{'DG1.2'}->{'DG1.2.1'};
    }

    public function getCode()
    {
        $codeElement = new CE($this->_diagnosis->{'DG1.3'}, 'DG1.3');

        return $codeElement;
    }

    public function getLabel()
    {
        return (string) $this->_diagnosis->{'DG1.3'}->{'DG1.3.1'};
    }

    public function getDescription()
    {
        return (string) $this->_diagnosis->{'DG1.4'}->{'DG1.4.1'};
    }

    public function getActivityTime()
    {
        return (string) $this->_diagnosis->{'DG1.5'}->{'DG1.5.1'};
    }

    public function getType()
    {
        return (string) $this->_diagnosis->{'DG1.6'}->{'DG1.6.1'};
    }

    public function getMajorCategory()
    {
        $codeElement = new CE($this->_diagnosis->{'DG1.7'}, 'DG1.7');

        return $codeElement;
    }

    public function getRelatedGroup()
    {
        $codeElement = new CE($this->_diagnosis->{'DG1.8'}, 'DG1.8');

        return $codeElement;
    }

    public function getPriority()
    {
        return (string) $this->_diagnosis->{'DG1.15'}->{'DG1.15.1'};
    }

    public function getDiagnosingProvider()
    {
        $name = new XCN($this->_diagnosis->{'DG1.16'}, 'DG1.16');

        return $name;
    }

    public function getClassification()
    {
        return (string) $this->_diagnosis->{'DG1.17'}->{'DG1.17.1'};
    }

    public function getId()
    {
        return (string) $this->_diagnosis->{'DG1.20'}->{'DG1.20.3'};
    }

    public function getActionCode()
    {
        return (string) $this->_diagnosis->{'DG1.21'}->{'DG1.21.1'};
    }

    public function getConfidentialIndicator()
    {
        return (string) $this->_diagnosis->{'DG1.18'}->{'DG1.18.1'};
    }

    public function getOutlierType()
    {
        return (string) $this->_diagnosis->{'DG1.11'}->{'DG1.11.1'};
    }
}
