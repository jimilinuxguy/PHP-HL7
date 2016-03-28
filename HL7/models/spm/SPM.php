<?php

$currentDir = getcwd();
require_once $currentDir.'/application/libraries/interfaces/HL7SPMInterface.php';
require_once $currentDir.'/application/libraries/interfaces/models/xpn/XPN.php';
require_once $currentDir.'/application/libraries/interfaces/models/xad/XAD.php';
require_once $currentDir.'/application/libraries/interfaces/models/ce/CE.php';

class SPM implements HL7SPMInterface
{
        protected $_spm;

        public function __construct($spm = null)
        {
            $this->_spm = $spm;
        }
        public function getSetId()
        {
            return (string) $this->_spm->{'SPM.1'}->{'SPM.1.1'};
        }
        public function getSpecimenCode()
        {
            $codeElement = new CE($this->_spm->{'SPM.4'}, 'SPM.4');

            return $codeElement;
        }
        public function getSpecimenAdditives()
        {
            $codeElement = new CE($this->_spm->{'SPM.6'}, 'SPM.6');

            return $codeElement;
        }
        public function getSpecimenColletionMethod()
        {
            return (string) $this->_spm->{'SPM.7'}->{'SPM.7.2'};
        }
        public function getSpecimenSourceSite()
        {
            $codeElement = new CE($this->_spm->{'SPM.8'}, 'SPM.8');

            return $codeElement;
        }
        public function getSpecimenBodyLocation()
        {
            return (string) $this->_spm->{'SPM.10'}->{'SPM.10.1'};
        }
        public function getSpecimenCollectionVolume()
        {
            return (string) $this->_spm->{'SPM.12'}->{'SPM.12.1'};
        }
        public function getSpecimenCollectionVolumeUnits()
        {
            $codeElement = new CE($this->_spm->{'SPM.12'}->{'SPM.12.2'}, 'SPM.12.2');

            return $codeElement;
        }
        public function getSpecimenDescription()
        {
            return (string) $this->_spm->{'SPM.14'}->{'SPM.14.1'};
        }
        public function getSpecimenActionCode()
        {
            return (string) $this->_spm->{'SPM.15'}->{'SPM.15.1'};
        }
        public function getSpecimenActivityTime()
        {
            return (string) $this->_spm->{'SPM.17'}->{'SPM.17.1'};
        }

        public function getSpecimenRole()
        {
            $codeElement = new CE($this->_spm->{'SPM.11'}, 'SPM.11');

            return $codeElement;
        }

        public function getSpecimenRiskCode()
        {
            return (string) $this->_spm->{'SPM.16'}->{'SPM.16.1'};
        }
}
