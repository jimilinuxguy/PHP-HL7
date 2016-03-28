<?php

interface HL7ORCInterface
{

    public function getOrderControl(); 
    public function getPlacerOrderNumber(); 
    public function getFillerOrderNumber(); 
    public function getPlacerGroupNumber(); 
    public function getOrderStatus(); 
    public function getResponseFlag(); 
    public function getQuantityTiming(); 
    public function getParent(); 
    public function getDateTimeTransaction(); 
    public function getEnteredBy(); 
    public function getVerifiedBy(); 
    public function getOrderingProvider(); 
    public function getEntererLocation(); 
    public function getCallBackPhoneNumber(); 
    public function getEffectiveDateTime(); 
    public function getOrderControlCodeReason(); 
    public function getEnteringDevice(); 
    public function getActionBy();
    
}