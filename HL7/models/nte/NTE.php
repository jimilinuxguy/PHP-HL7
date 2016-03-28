<?php
$currentDir = getcwd();
require($currentDir.'/application/libraries/interfaces/HL7NTEInterface.php');

class NTE implements HL7NTEInterface
{

    private $_nte;

    public function __construct($nte = null) 
    {
        if ( isset($nte) ) {
            $this->_nte = $nte;
        }
    }

    public function getSetId() 
    {
        return (string) $this->_nte->{'NTE.1'}->{'NTE.1.1'};
    }

    public function getSourceOfComment()
    {
        return (string) $this->_nte->{'NTE.2'}->{'NTE.2.1'};
    }

    public function getComment() 
    {
        return (string) $this->_nte->{'NTE.3'}->{'NTE.3.1'};
    }
}