<?php
$currentDir = getcwd();
require_once $currentDir.'/application/libraries/interfaces/HL7GT1Interface.php';
require_once $currentDir.'/application/libraries/interfaces/models/xpn/XPN.php';
require_once $currentDir.'/application/libraries/interfaces/models/xad/XAD.php';
require_once $currentDir.'/application/libraries/interfaces/models/ce/CE.php';

    class GT1 implements HL7GT1interface
    {
        private $_gt1;

        public function __construct($gt1 = null)
        {
            if ( isset($gt1) ) {
                $this->_gt1 = $gt1;
            }
        }
        public function getGuarantorNumber()
        {
            return (string) $this->_gt1->{'GT1.2'}->{'GT1.2.1'};
        }
        public function getName()
        {
            return new XPN($this->_gt1->{'GT1.3'},'GT1.3');
        }
        public function getAddress()
        {
            return new XAD($this->_gt1->{'GT1.5'}, 'GT1.5');
        }
        public function getHomePhone()
        {
            return (string) $this->_gt1->{'GT1.6'}->{'GT1.6.1'};
        }
        public function getWorkPhone()
        {
            return (string) $this->_gt1->{'GT1.7'}->{'GT1.7.1'};
        }
        public function getDateOfBirth()
        {
            return (string) $this->_gt1->{'GT1.8'}->{'GT1.8.1'};
        }
        public function getGender()
        {
            return (string) $this->_gt1->{'GT1.9'}->{'GT1.9.1'};
        }
        public function getRelationship()
        {
            return (string) $this->_gt1->{'GT1.11'}->{'GT1.11.1'};
        }
    }