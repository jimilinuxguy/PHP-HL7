<?php

$currentDir = getcwd();
require_once $currentDir.'/application/libraries/interfaces/HL7NK1Interface.php';
require_once $currentDir.'/application/libraries/interfaces/models/xpn/XPN.php';
require_once $currentDir.'/application/libraries/interfaces/models/xad/XAD.php';
require_once $currentDir.'/application/libraries/interfaces/models/ce/CE.php';

 class NK1 implements HL7NK1Interface
{
        private $_nk1;
        private $_prefix;

        public function __construct($nk1 = null, $prefix = null)
        {
            $this->_nk1 = $nk1;
            $this->_prefix = $prefix;
        }

        public function getSetId()
        {
        }
        public function getName()
        {
            $name = new XPN($this->_nk1->{'NK1.2'}, 'NK1.2');

            return $name;
        }
        public function getRelationship()
        {
            $codeElement = new CE($this->_nk1->{'NK1.3'}, 'NK1.3');

            return $codeElement;
        }
        public function getAddress()
        {
            $address = new XAD($this->_nk1->{'NK1.4'}, 'NK1.4');

            return $address;
        }

        public function getHomePhone()
        {
            return (string) $this->_nk1->{'NK1.5'}->{'NK1.5.1'};
        }
        public function getBusinessPhone()
        {
            return (string) $this->_nk1->{'NK1.6'}->{'NK1.6.1'};
        }
        public function getContactRole()
        {
            $codeElement = new CE($this->_nk1->{'NK1.7'}, 'NK1.7');

            return $codeElement;
        }
        public function getStartDate()
        {
            return (string) $this->_nk1->{'NK1.8'}->{'NK1.8.1'};
        }
        public function getEndDate()
        {
            return (string) $this->_nk1->{'NK1.9'}->{'NK1.9.1'};
        }
        public function getJobTitle()
        {
            return (string) $this->_nk1->{'NK1.10'}->{'NK1.10.1'};
        }
        public function getJobCode()
        {
            return (string) $this->_nk1->{'NK1.11'}->{'NK1.11.1'};
        }
        public function getEmployeeNumber()
        {
            return (string) $this->_nk1->{'NK1.12'}->{'NK1.12.1'};
        }
        public function getOrganizationName()
        {
            return (string) $this->_nk1->{'NK1.13'}->{'NK1.13.1'};
        }
        public function getMaritalStatus()
        {
            return (string) $this->_nk1->{'NK1.14'}->{'NK1.14.1'};
        }
        public function getSex()
        {
            return (string) $this->_nk1->{'NK1.15'}->{'NK1.15.1'};
        }
        public function getBirthDate()
        {
            return (string) $this->_nk1->{'NK1.16'}->{'NK1.16.1'};
        }
        public function getLivingDependency()
        {
            return (string) $this->_nk1->{'NK1.17'}->{'NK1.17.1'};
        }
        public function getAmbulatoryStatus()
        {
            return (string) $this->_nk1->{'NK1.18'}->{'NK1.18.1'};
        }
        public function getCitizenship()
        {
            $codeElement = new CE($this->_nk1->{'NK1.19'}, 'NK1.19');

            return $codeElement;
        }
        public function getPrimaryLanguage()
        {
            $codeElement = new CE($this->_nk1->{'NK1.20'}, 'NK1.20');

            return $codeElement;
        }
        public function getLivingArrangement()
        {
            return (string) $this->_nk1->{'NK1.21'}->{'NK1.21.1'};
        }
        public function getPublicityIndicator()
        {
            return (string) $this->_nk1->{'NK1.22'}->{'NK1.22.1'};
        }
        public function getProtectionIndicator()
        {
            return (string) $this->_nk1->{'NK1.23'}->{'NK1.23.1'};
        }
        public function getStudentIndicator()
        {
            return (string) $this->_nk1->{'NK1.24'}->{'NK1.24.1'};
        }
        public function getReligion()
        {
            $codeElement = new CE($this->_nk1->{'NK1.25'}, 'NK1.25');

            return $codeElement;
        }
        public function getMotherMaidenName()
        {
            $name = new XPN($this->_nk1->{'NK1.26'}, 'NK1.26');

            return $name;
        }
        public function getNationality()
        {
            $codeElement = new CE($this->_nk1->{'NK1.27'}, 'NK1.27');

            return $codeElement;
        }
        public function getEthnicGroup()
        {
            $codeElement = new CE($this->_nk1->{'NK1.28'}, 'NK1.28');

            return $codeElement;
        }
        public function getContactReason()
        {
            $codeElement = new CE($this->_nk1->{'NK1.29'}, 'NK1.29');

            return $codeElement;
        }
        public function getContactPerson()
        {
            $name = new XPN($this->_nk1->{'NK1.30'}, 'NK1.30');

            return $name;
        }

        public function getContactPhone()
        {
            return (string) $this->_nk1->{'NK1.31'}->{'NK1.31.1'};
        }
        public function getContactAddress()
        {
            return (string) $this->_nk1->{'NK1.32'}->{'NK1.32.1'};
        }
        public function getIdentifiers()
        {
            return (string) $this->_nk1->{'NK1.33'}->{'NK1.33.1'};
        }
        public function getJobStatus()
        {
            return (string) $this->_nk1->{'NK1.34'}->{'NK1.34.1'};
        }
        public function getRace()
        {
            $codeElement = new HL7CE($this->_nk1->{'NK1.35'}, 'NK1.35');

            return $codeElement;
        }
        public function getHandicap()
        {
            return (string) $this->_nk1->{'NK1.36'}->{'NK1.36.1'};
        }
        public function getContactSSN()
        {
            return (string) $this->_nk1->{'NK1.37'}->{'NK1.37.1'};
        }
 }
