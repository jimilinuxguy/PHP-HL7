<?php

$currentDir = getcwd();
require_once $currentDir.'/application/libraries/interfaces/HL7TQ1Interface.php';
require_once $currentDir.'/application/libraries/interfaces/models/ce/CE.php';
class TQ1 implements HL7TQ1Interface
{
        protected $_tq1;

        public function __construct($tq1 = null)
        {
            $this->_tq1 = $tq1;
        }

        public function getId()
        {   

            return (string) $this->_tq1->{'TQ1.1'}->{'TQ1.1.1'};
        }
        public function getQuantity()
        {
            return (string) $this->_tq1->{'TQ1.2'}->{'TQ1.2.1'};
        }
        public function getQuantityUnits()
        {
            $codeElement = new CE($this->_tq1->{'TQ1.3'}, 'TQ1.3');

            return $codeElement;
        }
        public function getDuration()
        {
            return (string) $this->_tq1->{'TQ1.6'}->{'TQ1.6.1'}.' '.$this->_tq1->{'TQ1.6'}->{'TQ1.6.2'};
        }
        public function getStartTime()
        {
            return (string) $this->_tq1->{'TQ1.7'}->{'TQ1.7.1'};
        }
        public function getEndTime()
        {
            return (string) $this->_tq1->{'TQ1.8'}->{'TQ1.8.1'};
        }
        public function getCondition()
        {
            return (string) $this->_tq1->{'TQ1.10'}->{'TQ1.10.1'};
        }
        public function getInstruction()
        {
            return (string) $this->_tq1->{'TQ1.11'}->{'TQ1.11.1'};
        }
        public function getOccurrenceDuration()
        {
            return (string) $this->_tq1->{'TQ1.13'}->{'TQ1.13.1'}.' '.$this->_tq1->{'TQ1.13'}->{'TQ1.13.2'};
        }
        public function getTotalOccurrences()
        {
            return (string) $this->_tq1->{'TQ1.14'}->{'TQ1.14.1'};
        }

        public function __toString()
        {
            return $this->getId().' '.
                        $this->getQuantity().' '.
                        $this->getQuantity().' '.
                        $this->getDuration().' '.
                        $this->getStartTime().' '.
                        $this->getEndTime().' '.
                        $this->getCondition().' '.
                        $this->getInstruction().' '.
                        $this->getOccurrenceDuration().' '.
                        $this->getTotalOccurrences();
        }
}
