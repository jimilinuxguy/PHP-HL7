<?php
$currentDir = getcwd();
require_once($currentDir.'/application/libraries/interfaces/HL7AL1Interface.php');
require_once($currentDir.'/application/libraries/interfaces/models/ce/CE.php');

class AL1 implements HL7AL1Interface
{

    protected $_allergy;
 
    public function __construct($allergy = null)
    {
        if ( isset($allergy) ) {
        
            $this->_allergy = $allergy;
        
        }

    }

    public function getSetId()
    {
        return (string) $this->_allergy->{'AL1.1'}->{'AL1.1.1'};
    }
    
    public function getAllergyType()
    {
        $codeElement = new CE($this->_allergy->{'AL1.2'}, 'AL1.2');
        return $codeElement;
    } 
    
    public function getCode()
    {
        $codeElement = new CE($this->_allergy->{'AL1.3'}, 'AL1.3');
        return $codeElement;
    }
    
    public function getSeverity() 
    { 
        $codeElement = new CE($this->_allergy->{'AL1.4'}, 'AL1.4');
        return $codeElement;
    }
    public function getReaction() 
    {
        $codeElement = new CE($this->_allergy->{'AL1.5'}, 'AL1.5');
        return $codeElement;
    }
   
    public function getIdentificationDate() 
    {
        return (string) $this->_allergy->{'AL1.6'}->{'AL1.6.1'};
    }

}