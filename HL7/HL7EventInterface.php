<?php

interface HL7EventInterface
{

    public function getEventTypeCode();
    public function getRecordedDateTime();
    public function getPlannedEventDateTime();
    public function getEventReasonCode();
    public function getEventOperatorId();
    public function getEventOccured();
 
}
