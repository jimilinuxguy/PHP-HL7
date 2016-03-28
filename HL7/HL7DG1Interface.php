<?php

interface HL7DG1Interface
{
    public function getCodeMethod();
    public function getCode();
    public function getLabel();
    public function getDescription();
    public function getActivityTime();
    public function getType();
    public function getMajorCategory();
    public function getRelatedGroup();
    public function getPriority();
    public function getDiagnosingProvider();
    public function getClassification();
    public function getId();
    public function getActionCode();
    public function getConfidentialIndicator();
    public function getOutlierType();
}
