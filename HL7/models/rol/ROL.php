<?php

$currentDir = getcwd();
require_once $currentDir.'/application/libraries/interfaces/HL7ROLInterface.php';
require_once $currentDir.'/application/libraries/interfaces/models/xpn/XPN.php';
require_once $currentDir.'/application/libraries/interfaces/models/xad/XAD.php';
require_once $currentDir.'/application/libraries/interfaces/models/ce/CE.php';
require_once $currentDir.'/application/libraries/interfaces/models/xcn/XCN.php';

class ROL implements HL7ROLInterface
{
        private $_rol;

        public function __construct($rol = null)
        {
            $this->_rol = $rol;
        }

        public function getRoleId()
        {
            return (string) $this->_rol->{'ROL.1'}->{'ROL.1.1'};
        }

        public function getActionCode()
        {
            $codeElement = new CE($this->_rol->{'ROL.2'}, 'ROL.2');

            return $codeElement;
        }

        public function getRole()
        {
            $codeElement = new CE($this->_rol->{'ROL.3'}, 'ROL.3');

            return $codeElement;
        }
        public function getRolePerson()
        {
            $named = new XCN($this->_rol{'ROL.4'}, 'ROL.4');

            return $named;
        }

        public function getRoleBeginTime()
        {
            return (string) $this->_rol->{'ROL.5'}->{'ROL.5.1'};
        }

        public function getRoleEndTime()
        {
            return (string) $this->_rol->{'ROL.6'}->{'ROL.6.1'};
        }

        public function getRoleDuration()
        {
            $codeElement = new CE($this->_rol->{'ROL.7'}, 'ROL.7');

            return $codeElement;
        }

        public function getRoleActionReason()
        {
            $codeElement = new CE($this->_rol->{'ROL.8'}, 'ROL.8');

            return $codeElement;
        }
}
