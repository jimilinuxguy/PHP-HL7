<?php

$currentDir = getcwd();

require_once $currentDir.'/application/libraries/interfaces/HL7LocationInterface.php';

class Location implements HL7LocationInterface
{
        private $_location;
        private $_prefix;

        public function __construct($location = null, $prefix=null)
        {
            if ( isset($location)) {
                $this->_location = $location;
            }
            if ( isset($prefix)) {
                $this->_prefix = $prefix;
            }
        }

        public function getPointOfCare()
        {
            return (string) $this->_location->{$this->_prefix.'.1'};
        }
        public function getRoom()
        {
            return (string) $this->_location->{$this->_prefix.'.2'};
        }
        public function getBed()
        {
            return (string) $this->_location->{$this->_prefix.'.3'};
        }
        public function getFacility()
        {
            return (string) $this->_location->{$this->_prefix.'.4'};
        }
        public function getStatus()
        {
            return (string) $this->_location->{$this->_prefix.'.5'};
        }
        public function getLocationType()
        {
            return (string) $this->_location->{$this->_prefix.'.6'};
        }
        public function getBuilding()
        {
            return (string) $this->_location->{$this->_prefix.'.7'};
        }
        public function getFloor()
        {
            return (string) $this->_location->{$this->_prefix.'.8'};
        }
        public function getDescription()
        {
            return (string) $this->_location->{$this->_prefix.'.9'};
        }
        public function getLocationIdentifier()
        {
            return (string) $this->_location->{$this->_prefix.'.10'};
        }

        public function __toString()
        {
            $string = 'Point Of Care: '.$this->getPointOfCare().'<br>';
            $string .= 'Room: '.$this->getRoom().'<br>';
            $string .= 'Bed: '.$this->getBed().'<br>';
            $string .= 'Facility: '.$this->getFacility().'<br>';
            $string .= 'Status: '.$this->getStatus().'<br>';
            $string .= 'Location Type: '.$this->getLocationType().'<br>';
            $string .= 'Building: '.$this->getBuilding().'<br>';
            $string .= 'Floor: '.$this->getFloor().'<br>';
            $string .= 'Description: '.$this->getDescription().'<br>';
            $string .= 'Location Identifier: '.$this->getLocationIdentifier();

            return $string;
        }
}
