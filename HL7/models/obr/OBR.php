<?php

$currentDir = getcwd();
require_once $currentDir.'/application/libraries/interfaces/HL7OBRInterface.php';
require_once $currentDir.'/application/libraries/interfaces/models/xcn/XCN.php';

class OBR implements HL7OBRInterface
{
    private $_obr;

    public function __construct($obr = null)
    {
        $this->_obr = $obr;
    }
    public function getSetID()
    {
    }
    public function getPlacerOrderNumber()
    {
        $codeElement = new CE($this->_obr->{'OBR.2'}, 'OBR.2');

        return $codeElement;
    }
    public function getFillerOrderNumber()
    {
        $codeElement = new CE($this->_obr->{'OBR.3'}, 'OBR.3');

        return $codeElement;
    }
    public function getUniversalServiceID()
    {
        $codeElement = new CE($this->_obr->{'OBR.4'}, 'OBR.4');

        return $codeElement;
    }
    public function getPriority()
    {
        return (string) $this->_obr->{'OBR.5'}->{'OBR.5.1'};
    }
    public function getRequestedDateTime()
    {
        return (string) $this->_obr->{'OBR.6'}->{'OBR.6.1'};
    }

    public function getObservationDateTime()
    {
        return (string) $this->_obr->{'OBR.7'}->{'OBR.7.1'};
    }

    public function getObservationEndDateTime()
    {
        return (string) $this->_obr->{'OBR.8'}->{'OBR.8.1'};
    }

    public function getCollectionVolume()
    {
        return (string) $this->_obr->{'OBR.9'}->{'OBR.9.1'};
    }
    public function getCollectorIdentifier()
    {
        $named = new XCN($this->_obr->{'OBR.10'}, 'OBR.10');

        return $named;
    }
    public function getSpecimenActionCode()
    {
        return (string) $this->_obr->{'OBR.11'}->{'OBR.11.1'};
    }
    public function getDangerCode()
    {
        $codeElement = new CE($this->_obr->{'OBR.12'}, 'OBR.12');

        return $codeElement;
    }
    public function getRelevantClinicalInfo()
    {
        return (string) $this->_obr->{'OBR.13'}->{'OBR.13.1'};
    }
    public function getSpecimenReceivedDateTime()
    {
        return (string) $this->_obr->{'OBR.14'}->{'OBR.14.1'};
    }
    public function getSpecimenSource()
    {
        $codeElement = new CE($this->_obr->{'OBR.15'}, 'OBR.15');

        return $codeElement;
    }
    public function getOrderingProvider()
    {
        $named = new XCN($this->_obr->{'OBR.16'}, 'OBR.16');

        return $named;
    }
    public function getOrderCallbackPhoneNumber()
    {
        return (string) $this->_obr->{'OBR.17'}->{'OBR.17.1'};
    }
    public function getPlacerField1()
    {
        return (string) $this->_obr->{'OBR.18'}->{'OBR.18.1'};
    }
    public function getPlacerField2()
    {
        return (string) $this->_obr->{'OBR.19'}->{'OBR.19.1'};
    }
    public function getFillerField1()
    {
        return (string) $this->_obr->{'OBR.20'}->{'OBR.20.1'};
    }
    public function getFillerField2()
    {
        return (string) $this->_obr->{'OBR.21'}->{'OBR.21.1'};
    }
    public function getResultsRptStatusChngDateTime()
    {
        return (string) $this->_obr->{'OBR.22'}->{'OBR.22.1'};
    }
    public function getChargeToPractice()
    {
        $codeElement = new CE($this->_obr->{'OBR.23'}, 'OBR.23');

        return $codeElement;
    }
    public function getDiagnosticServSectID()
    {
        return (string) $this->_obr->{'OBR.24'}->{'OBR.24.1'};
    }
    public function getResultStatus()
    {
        return (string) $this->_obr->{'OBR.25'}->{'OBR.25.1'};
    }
    public function getParentResult()
    {
        $codeElement = new CE($this->_obr->{'OBR.26'}, 'OBR.26');

        return $codeElement;
    }
    public function getQuantityTiming()
    {
        return (string) $this->_obr->{'OBR.27'}->{'OBR.27.1'};
    }
    public function getResultCopiesToParent()
    {
        return (string) $this->_obr->{'OBR.28'}->{'OBR.28.1'};
    }

    public function getParent()
    {
        $codeElement = new CE($this->_obr->{'OBR.29'}, 'OBR.29');

        return $codeElement;
    }
    public function getTransportationMode()
    {
        return (string) $this->_obr->{'OBR.30'}->{'OBR.30.1'};
    }
    public function getReasonForStudy()
    {
        $codeElement = new CE($this->_obr->{'OBR.31'}, 'OBR.31');

        return $codeElement;
    }
    public function getPrincipalResultInterpreter()
    {
        $codeElement = new CE($this->_obr->{'OBR.32'}, 'OBR.32');

        return $codeElement;
    }
    public function getAssistantResultInterpreter()
    {
        $codeElement = new CE($this->_obr->{'OBR.33'}, 'OBR.33');

        return $codeElement;
    }
    public function getTechnician()
    {
        $codeElement = new CE($this->_obr->{'OBR.34'}, 'OBR.34');

        return $codeElement;
    }
    public function getTranscriptionist()
    {
        $codeElement = new CE($this->_obr->{'OBR.35'}, 'OBR.35');

        return $codeElement;
    }
    public function getScheduledDateTime()
    {
        return (string) $this->_obr->{'OBR.36'}->{'OBR.36.1'};
    }
    public function getNumberOfSampleContainers()
    {
        return (string) $this->_obr->{'OBR.37'}->{'OBR.37.1'};
    }
    public function getTransportLogisticsOfCollectedSample()
    {
        $codeElement = new CE($this->_obr->{'OBR.38'}, 'OBR.38');

        return $codeElement;
    }
    public function getCollectorComment()
    {
        $codeElement = new CE($this->_obr->{'OBR.39'}, 'OBR.39');

        return $codeElement;
    }
    public function getTransportArrangementResponsibility()
    {
        $codeElement = new CE($this->_obr->{'OBR.40'}, 'OBR.40');

        return $codeElement;
    }
    public function getTransportArranged()
    {
        return (string) $this->_obr->{'OBR.41'}->{'OBR.41.1'};
    }
    public function getEscortRequired()
    {
        return (string) $this->_obr->{'OBR.41'}->{'OBR.41.1'};
    }
    public function getPlannedPatientTransportComment()
    {
        $codeElement = new CE($this->_obr->{'OBR.43'}, 'OBR.43');

        return $codeElement;
    }
}
