<?php

$currentDir = getcwd();
require_once $currentDir.'/application/libraries/interfaces/HL7OBXInterface.php';
require_once $currentDir.'/application/libraries/interfaces/models/xpn/XPN.php';
require_once $currentDir.'/application/libraries/interfaces/models/xad/XAD.php';
require_once $currentDir.'/application/libraries/interfaces/models/ce/CE.php';

class OBX implements HL7OBXInterface
{
        private $_obx;

        public function __construct($obx = null)
        {
            $this->_obx = $obx;
        }
        public function getSetId()
        {
            return (string) $this->_obx->{'OBX.1'}->{'OBX.1.1'};
        }
        public function getValueType()
        {
            return (string) $this->_obx->{'OBX.2'}->{'OBX.2.1'};
        }
        public function getObservationIdentifier()
        {
            $codeElement = new CE($this->_obx->{'OBX.3'}, 'OBX.3');

            return $codeElement;
        }
        public function getObservationSubId()
        {
            return (string) $this->_obx->{'OBX.4'}->{'OBX.4.1'};
        }
        public function getObservationValue()
        {
            return (string) $this->_obx->{'OBX.5'}->{'OBX.5.1'};
        }
        public function getUnits()
        {
            $codeElement = new CE($this->_obx->{'OBX.6'}, 'OBX.6');

            return $codeElement;
        }
        public function getReferenceRange()
        {
            return (string) $this->_obx->{'OBX.7'}->{'OBX.7.1'};
        }
        public function getAbnormalFlags()
        {
            return (string) $this->_obx->{'OBX.8'}->{'OBX.8.1'};
        }
        public function getProbability()
        {
            return (string) $this->_obx->{'OBX.9'}->{'OBX.9.1'};
        }
        public function getNatureOfAbnormalTest()
        {
            return (string) $this->_obx->{'OBX.10'}->{'OBX.10.1'};
        }
        public function getResultStatus()
        {
            return (string) $this->_obx->{'OBX.11'}->{'OBX.11.1'};
        }
        public function getDataLastObsNormalValues()
        {
            return (string) $this->_obx->{'OBX.12'}->{'OBX.12.1'};
        }
        public function getUserDefinedAccessChecks()
        {
            return (string) $this->_obx->{'OBX.13'}->{'OBX.13.1'};
        }
        public function getDateTimeOfObservation()
        {
            return (string) $this->_obx->{'OBX.14'}->{'OBX.14.1'};
        }
        public function getProducerId()
        {
            $codeElement = new CE($this->_obx->{'OBX.15'}, 'OBX.15');

            return $codeElement;
        }
        public function getResponsibleObserver()
        {
            $name = new XCN($this->_obx->{'OBX.16'}, 'OBX.16');

            return $name;
        }
        public function getObservationMethod()
        {
            $codeElement = new CE($this->_obx->{'OBX.17'}, 'OBX.17');

            return $codeElement;
        }
}
