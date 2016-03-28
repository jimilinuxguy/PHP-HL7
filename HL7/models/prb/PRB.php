<?php

$currentDir = getcwd();
require_once $currentDir.'/application/libraries/interfaces/HL7PRBInterface.php';
require_once $currentDir.'/application/libraries/interfaces/models/xcn/XCN.php';
require_once $currentDir.'/application/libraries/interfaces/models/ce/CE.php';

 class PRB implements HL7PRBInterface
{
        protected $_prb;

        public function __construct($prb = null)
        {
            $this->_prb = $prb;
        }

        public function getActivityTime()
        {
            return (string) $this->_prb->{'PRB.2'}->{'PRB.2.1'};
        }
        public function getCode()
        {
            $codeElement = new CE($this->_prb->{'PRB.3'}, 'PRB.3');

            return $codeElement;
        }
        public function getId()
        {
            return (string) $this->_prb->{'PRB.4'}->{'PRB.4.1'};
        }
        public function getDiagnosedOn()
        {
            return (string) $this->_prb->{'PRB.7'}->{'PRB.7.1'};
        }
        public function getAnticipatedResolution()
        {
            return (string) $this->_prb->{'PRB.8'}->{'PRB.8.1'};
        }
        public function getEndTime()
        {
            return (string) $this->_prb->{'PRB.9'}->{'PRB.9.1'};
        }
        public function getProblemType()
        {
            $codeElement = new CE($this->_prb->{'PRB.10'}, 'PRB.10');

            return $codeElement;
        }
        public function getStatusCode()
        {
            $codeElement = new CE($this->_prb->{'PRB.13'}, 'PRB.13');

            return $codeElement;
        }
        public function getProblemStatus()
        {
            $codeElement = new CE($this->_prb->{'PRB.14'}, 'PRB.14');

            return $codeElement;
        }
        public function getCertainty()
        {
            $codeElement = new CE($this->_prb->{'PRB.19'}, 'PRB.19');

            return $codeElement;
        }
        public function getProbability()
        {
            return (string) $this->_prb->{'PRB.20'}->{'PRB.20.1'};
        }
        public function getPatientProblemAwareness()
        {
            $codeElement = new CE($this->_prb->{'PRB.21'}, 'PRB.21');

            return $codeElement;
        }
        public function getPrognosis()
        {
            return (string) $this->_prb->{'PRB.22'}->{'PRB.22.1'};
        }
        public function getPatientPrognosisAwareness()
        {
            $codeElement = new CE($this->_prb->{'PRB.23'}, 'PRB.23');

            return $codeElement;
        }
        public function getFamilyAwareness()
        {
            $codeElement = new CE($this->_prb->{'PRB.24'}, 'PRB.24');

            return $codeElement;
        }
        public function getConfidentialityCode()
        {
            $codeElement = new CE($this->_prb->{'PRB.25'}, 'PRB.25');

            return $codeElement;
        }
        public function getRecordingProvider()
        {
            $name = new XCN($this->_prb->{'PRB.26'}, 'PRB.26');

            return $name;
        }
        public function getDiagnosingProvider()
        {
            $name = new XCN($this->_prb->{'PRB.27'}, 'PRB.27');

            return $name;
        }
 }
