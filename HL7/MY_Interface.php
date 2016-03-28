<?php

require_once 'HL7Interface.php';
require_once 'models/al1/AL1.php';
require_once 'models/dg1/DG1.php';
require_once 'models/gt1/GT1.php';
require_once 'models/evn/EVN.php';
require_once 'models/in1/IN1.php';
require_once 'models/msh/MSH.php';
require_once 'models/nk1/NK1.php';
require_once 'models/nte/NTE.php';
require_once 'models/obr/OBR.php';
require_once 'models/obx/OBX.php';
require_once 'models/orc/ORC.php';
require_once 'models/pid/PID.php';
require_once 'models/prb/PRB.php';
require_once 'models/pv1/PV1.php';
require_once 'models/pr1/PR1.php';
require_once 'models/rol/ROL.php';
require_once 'models/rxa/RXA.php';
require_once 'models/rxe/RXE.php';
require_once 'models/rxo/RXO.php';
require_once 'models/spm/SPM.php';

class MY_Interface implements HL7Interface
{
    //private $type = 'ADT';
    private $_CI;
    private $_xml;

    public function __construct($xml = null)
    {
        $this->_CI = & get_instance();
        if ( isset($xml)) {
            if (  is_string($xml) ) {
                try {
                    $this->_xml = $this->handleXML($xml);
                } catch (Exception $ex) {
                    throw new exception('Could not load XML');
                }
            } else if ( $xml instanceof SimpleXMLElement) {
                $this->_xml = $xml;
            } else {
                throw new Exception('Invalid data for constructor');
            }
        }
    }

    public function getMSH()
    {
        return new MSH($this->_xml->MSH);
    }

    public function getType()
    {
        return (string) $this->_xml->EVN->{'EVN.1'}->{'EVN.1.1'};
    }

    private function handleXML($xml)
    {
            libxml_use_internal_errors(true);
            $doc = simplexml_load_string($xml);

            if ($doc === false) {
                throw new Exception('Could not load XML');
            } 

        return $doc;
    }

    public function getPatient()
    {
        return new PID($this->_xml->PID);
    }

    public function getPatientVisit()
    {

        return new PV1($this->_xml->{'PV1'});
    }

    public function getDiagnosis()
    {
        $diags = $this->_xml->xpath('//DG1');
        $diags = array_map(function($diag) { return new DG1($diag);},$diags);
        return $diags;
    }

    public function getProcedures()
    {
        $procs = $this->_xml->xpath('//PR1');
        $procs = array_map(function($proc) { return new PR1($proc);},$procs);
        return $procs;
    }

    public function getEvent()
    {
        return new EVN($this->_xml->EVN);
    }

    public function getEventTime()
    {
        return (string) $this->_xml->EVN->{'EVN.2'}->{'EVN.2.1'};
    }
    
    public function getPatientInsurance()
    {
        $ret =   array_map(function($in1) { return new IN1($in1); },$this->_xml->xpath('//IN1'));
        return $ret;
    }

    public function getPatientAllergy()
    {
        $ret =   array_map(function($al1) { return new AL1($al1); },$this->_xml->xpath('//AL1'));
        return $ret;
    }


    public function getNextOfKin()
    {
        $ret =  array_map(function($nk1) { return new NK1($nk1); },$this->_xml->xpath('//NK1'));
        return $ret;
    }

    public function getROL()
    {
      $ret =  array_map(function($rol) { return new ROL($rol); },$this->_xml->xpath('//ROL1'));
      return $ret;
    }

    public function getOBX()
    {
        $ret =  array_map(function($obx) { return new OBX($obx); },$this->_xml->xpath('//OBX'));
        return $ret;
    }

    public function getNTE()
    {
       $ret =  array_map(function($nte) { return new NTE($nte); },$this->_xml->xpath('//NTE'));
        return $ret;
    }

    public function getORC()
    {
        $ret =  array_map(function($orc) { return new ORC($orc); },$this->_xml->xpath('//ORC'));
        return $ret;
    }

    public function getOBR()
    {
        $ret =  array_map(function($obr) { return new OBR($obr); },$this->_xml->xpath('//OBR'));
        return $ret;
    }

    public function getSPM()
    {
        $ret =  array_map(function($spm) { return new SPM($spm); },$this->_xml->xpath('//SPM'));
        return $ret;
    }

    public function getRXO()
    {
        $ret =  array_map(function($rxo) { return new RXO($rxo); },$this->_xml->xpath('//RXO'));
        return $ret;
    }

    public function getRXE()
    {
        $ret =  array_map(function($rxe) { return new RXE($rxe); },$this->_xml->xpath('//RXE'));
        return $ret;
    }

    public function getRXA()
    {
        $ret = array_map(function($rxa) { return new RXA($rxa); },$this->_xml->xpath('//RXA'));
        return $ret;
    }

    public function getPRB()
    {
        $ret =  array_map(function($prb) { return new PRB($prb); },$this->_xml->xpath('//PRB'));
        return $ret;
    }

    public function getPatientVisitNumber()
    {
        $pid = $this->getPatient();
        $visit = $this->getPatientVisit();

        $visitNumberArray = array();
        $visitNumberArray[] = $pid->getPatientInternalId();
        $visitNumberArray[] = $pid->getPatientAccountNumber();
        
        if ( $visit ) {
            $visitNumberArray[] = $visit->getVisitNumber();
        }

        $visitNumberArray = array_unique($visitNumberArray);
        $visitNumberArray = array_filter($visitNumberArray, 'strlen');

        return end($visitNumberArray);

    }

    public function getGT1()
    {
        $ret =  array_map(function($gt1) { return new GT1($gt1); },$this->_xml->xpath('//GT1'));
        return $ret;
    }
}
