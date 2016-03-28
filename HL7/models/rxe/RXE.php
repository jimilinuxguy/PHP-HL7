<?php

$currentDir = getcwd();
require_once $currentDir.'/application/libraries/interfaces/HL7RXEInterface.php';
require_once $currentDir.'/application/libraries/interfaces/models/xpn/XPN.php';
require_once $currentDir.'/application/libraries/interfaces/models/xcn/XCN.php';
require_once $currentDir.'/application/libraries/interfaces/models/ce/CE.php';
require_once $currentDir.'/application/libraries/interfaces/models/tq1/TQ1.php';
require_once $currentDir.'/application/libraries/interfaces/models/xad/XAD.php';

class RXE implements HL7RXEInterface
{
        protected $_rxe;

        public function __construct($rxe = null)
        {
            if ($rxe) {
                $this->_rxe = $rxe;
            }
        }

        public function getDoseFrequency()
        {
            $timing = new TQ1($this->_rxe->{'RXE.1'}, 'RXE.1');

            return $timing;
        }
        public function getCode()
        {
            $codeElement = new CE($this->_rxe->{'RXE.2'}, 'RXE.2');

            return $codeElement;
        }
        public function getProductForm()
        {
            $codeElement = new CE($this->_rxe->{'RXE.3'}, 'RXE.3');

            return $codeElement;
        }
        public function getAdminInstructions()
        {
            return (string) $this->_rxe->{'RXE.7'}->{'RXE.7.1'};
        }
        public function getDoseQuantity()
        {
            return (string) $this->_rxe->{'RXE.10'}->{'RXE.10.1'};
        }
        public function getDoseQuantityUnits()
        {
            return (string) $this->_rxe->{'RXE.11'}->{'RXE.11.1'};
        }
        public function getRefillsTotal()
        {
            return (string) $this->_rxe->{'RXE.12'}->{'RXE.12.1'};
        }
        public function getPrescribingProvider()
        {
            $name = new XCN($this->_rxe->{'RXE.13'}, 'RXE.13');

            return $name;
        }
        public function getRefillsRemaining()
        {
            return (string) $this->_rxe->{'RXE.16'}->{'RXE.16.1'};
        }
        public function getPharmacyInstructions()
        {
            return (string) $this->_rxe->{'RXE.21'}->{'RXE.21.1'};
        }
        public function getStrength()
        {
            return (string) $this->_rxe->{'RXE.25'}->{'RXE.25.1'};
        }
        public function getStrengthUnit()
        {
            return (string) $this->_rxe->{'RXE.26'}->{'RXE.26.1'};
        }
        public function getPharmacyName()
        {
            return (string) $this->_rxe->{'RXE.40'}->{'RXE.40.1'};
        }
        public function getPharmacyAddress()
        {
            $address = new XAD($this->_rxe->{'RX.41'}, 'RX.41');

            return $address;
        }
}
