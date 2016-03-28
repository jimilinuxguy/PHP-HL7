<?php

interface HL7ROLInterface
{
    public function getRoleId();
    public function getActionCode();
    public function getRole();
    public function getRolePerson();
    public function getRoleBeginTime();
    public function getRoleEndTime();
    public function getRoleDuration();
    public function getRoleActionReason();
}