<?php

$currentDir = getcwd();
require_once $currentDir.'/application/libraries/interfaces/HL7RXOInterface.php';
require_once $currentDir.'/application/libraries/interfaces/models/xad/XAD.php';
require_once $currentDir.'/application/libraries/interfaces/models/xcn/XCN.php';
require_once $currentDir.'/application/libraries/interfaces/models/ce/CE.php';
require_once $currentDir.'/application/libraries/interfaces/models/locations/Location.php';

class RXO implements HL7RXOInterface
{
        protected $_rxo;

        public function __construct($rxo = null)
        {
            $this->_rxo = $rxo;
        }

        public function getRequestedGiveCode()
        {
            $codeElement = new CE($this->_rxo->{'RXO.1'}, 'RXO.1');

            return $codeElement;
        }
        public function getRequestedGiveAmountMinimum()
        {
            return (string) $this->_rxo->{'RXO.2'}->{'RXO.2.1'};
        }
        public function getRequestedGiveAmountMaximum()
        {
            return (string) $this->_rxo->{'RXO.3'}->{'RXO.3.1'};
        }
        public function getRequestedGiveUnits()
        {
            return (string) $this->_rxo->{'RXO.4'}->{'RXO.4.1'};
        }
        public function getRequestedDosageForm()
        {
            return (string) $this->_rxo->{'RXO.5'}->{'RXO.5.1'};
        }
        public function getRequestedTreatmentInstructions()
        {
            $codeElement = new CE($this->_rxo->{'RXO.6'}, 'RXO.6');

            return $codeElement;
        }
        public function getProviderAdministrationInstruction()
        {
            $codeElement = new CE($this->_rxo->{'RXO.7'}, 'RXO.7');

            return $codeElement;
        }
        public function getDeliverToLocation()
        {
            $location = new Location($this->_rxo->{'RXO.8'}, 'RXO.8');

            return $location;
        }
        public function getAllowSubstitutions()
        {
            return (string) $this->_rxo->{'RXO.9'}->{'RXO.9.1'};
        }
        public function getRequestedDispenseCode()
        {
            $codeElement = new CE($this->_rxo->{'RXO.10'}, 'RXO.10');

            return $codeElement;
        }
        public function getRequestedDispenseAmount()
        {
            $codeElement = new CE($this->_rxo->{'RXO.11'}, 'RXO.11');

            return $codeElement;
        }
        public function getRequestedDispenseUnits()
        {
            $codeElement = new CE($this->_rxo->{'RXO.12'}, 'RXO.12');

            return $codeElement;
        }
        public function getNumberOfRefills()
        {
            $codeElement = new CE($this->_rxo->{'RXO.13'}, 'RXO.13');

            return $codeElement;
        }
        public function getOrderingProviderDEANumber()
        {
            $named = new XCN($this->_rxo->{'RXO.14'}, 'RXO.14');

            return $named;
        }
        public function getTreatmentProviderDEANumber()
        {
            $named = new XCN($this->_rxo->{'RXO.15'}, 'RXO.15');

            return $named;
        }
        public function getNeedsHumanReview()
        {
            return (string) $this->_rxo->{'RXO.16'}->{'RXO.16.1'};
        }
        public function getRequestedGivePerTimeUnit()
        {
            return (string) $this->_rxo->{'RXO.17'}->{'RXO.17.1'};
        }
        public function getRequestedGiveStrength()
        {
            $named = new XCN($this->_rxo->{'RXO.18'}, 'RXO.18');

            return $named;
        }
        public function getRequestedGiveStrengthUnits()
        {
            $codeElement = new CE($this->_rxo->{'RXO.19'}, 'RXO.19');

            return $codeElement;
        }
        public function getIndication()
        {
            $codeElement = new CE($this->_rxo->{'RXO.20'}, 'RXO.20');

            return $codeElement;
        }
        public function getRequestedGiveRateAmount()
        {
            return (string) $this->_rxo->{'RXO.21'}->{'RXO.21.1'};
        }
        public function getRequestedGiveRateUnits()
        {
            $codeElement = new CE($this->_rxo->{'RXO.22'}, 'RXO.22');

            return $codeElement;
        }
}
