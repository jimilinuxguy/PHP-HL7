<?php
$currentDir = getcwd();
require_once($currentDir.'/application/libraries/interfaces/HL7EventInterface.php');

class EVN implements HL7EventInterface
{
     private $_event;

    public function __construct($event = null)
    {
        if ( $event) {
            $this->_event = $event;
         } else {
            throw new Exception('Could not load Event');
         }
    }

    public function getEventTypeCode()
    {
        return (string) $this->_event->{'EVN.1'}->{'EVN.1.1'};
    }

    public function getRecordedDateTime()
    {
        return (string) $this->_event->{'EVN.2'}->{'EVN.2.1'};
    }

    public function getPlannedEventDateTime()
    {
        return (string) $this->_event->{'EVN.3'}->{'EVN.3.1'};
    }

    public function getEventReasonCode()
    {
        return (string) $this->_event->{'EVN.4'}->{'EVN.4.1'};
    }

    public function getEventOperatorId()
    {
        return  (string) $this->_event->{'EVN.5'}->{'EVN.5.1'};
    }

    public function getEventOccured()
    {
        return (string) $this->_event->{'EVN.6'}->{'EVN.6.1'};
    }

}
