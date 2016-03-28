<?php

$currentDir = getcwd();
require_once $currentDir.'/application/libraries/interfaces/HL7MSHInterface.php';

class MSH implements HL7MSHInterface
{
        private $_msh;

        public function __construct($msh = null)
        {
            if ( isset($msh)) {
                $this->_msh = $msh;
            } else {
                throw new Exception('Could not load MSH');
            }
        }
        public function getFieldSeparator()
        {
            return (string) $this->_msh->{'MSH.1'};
        }

        public function getEncodingCharacters()
        {
            return (string) $this->_msh->{'MSH.2'};
        }

        public function getSendingApplication()
        {
            return (string) $this->_msh->{'MSH.3'}->{'MSH.3.1'};
        }

        public function getSendingFacility()
        {
            return (string) $this->_msh->{'MSH.4'}->{'MSH.4.1'};
        }

        public function getReceivingApplication()
        {
            return (string) $this->_msh->{'MSH.5'}->{'MSH.5.1'};
        }

        public function getReceivingFacility()
        {
            return (string) $this->_msh->{'MSH.6'}->{'MSH.6.1'};
        }

        public function getDateTime()
        {
            return (string) $this->_msh->{'MSH.7'}->{'MSH.7.1'};
        }

        public function getSecurity()
        {
            return (string) $this->_msh->{'MSH.8'}->{'MSH.8.1'};
        }
        public function getMessageType()
        {
            return (string) $this->_msh->{'MSH.9'}->{'MSH.9.1'};
        }
        public function getMessageTypeCode()
        {
            return (string) $this->_msh->{'MSH.9'}->{'MSH.9.2'};
        }

        public function getControlId()
        {
            return (string) $this->_msh->{'MSH.10'}->{'MSH.10.1'};
        }

        public function getProcessingId()
        {
            return (string) $this->_msh->{'MSH.11'}->{'MSH.11.1'};
        }

        public function getVersionId()
        {
            return (string) $this->_msh->{'MSH.12'}->{'MSH.12.1'};
        }

        public function getSequenceNumber()
        {
            return (string) $this->_msh->{'MSH.13'}->{'MSH.13.1'};
        }

        public function getContinuationPointer()
        {
            return (string) $this->_msh->{'MSH.14'}->{'MSH.14.1'};
        }

        public function getAcceptAcknowledgmentType()
        {
            return (string) $this->_msh->{'MSH.15'}->{'MSH.15.1'};
        }

        public function getApplicationAcknowledgmentType()
        {
            return (string) $this->_msh->{'MSH.16'}->{'MSH.16.1'};
        }

        public function getCountryCode()
        {
            return (string) $this->_msh->{'MSH.17'}->{'MSH.17.1'};
        }

        public function getCharacterSet()
        {
            return (string) $this->_msh->{'MSH.18'}->{'MSH.18.1'};
        }

        public function getPrincipalLanguageOfMessage()
        {
            return (string) $this->_msh->{'MSH.19'}->{'MSH.19.1'};
        }
}
