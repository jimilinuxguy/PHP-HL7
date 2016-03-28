<?php

$currentDir = getcwd();
require $currentDir.'/application/libraries/interfaces/HL7XPNInterface.php';

class XPN implements HL7XPNInterface
{
        private $_nameData;
        private $_prefix;

        public function __construct($nameData = null, $prefix = null)
        {
            $this->_nameData = $nameData;
            $this->_prefix = (string) $prefix;
        }

        public function getFirstName()
        {
            return (string) $this->_nameData->{$this->_prefix.'.2'};
        }

        public function getLastName()
        {
            return (string) $this->_nameData->{$this->_prefix.'.1'};
        }

        public function getMiddleName()
        {
            return (string) $this->_nameData->{$this->_prefix.'.3'};
        }

        public function getDegree()
        {
            return (string) $this->_nameData->{$this->_prefix.'.7'};
        }

        public function getSuffix()
        {
            return (string) $this->_nameData->{$this->_prefix.'.4'}.(string) $this->_nameData->{$this->_prefix.'.14'};
        }

        public function getPrefix()
        {
            return (string) $this->_nameData->{$this->_prefix.'.5'};
        }

        public function __toString()
        {
            $string = $this->getPrefix().' '.
                            $this->getFirstName().' '.
                            $this->getMiddleName().' '.
                            $this->getLastName().' '.
                            $this->getDegree().' '.
                            $this->getSuffix();

            return $string;
        }
}
