<?php


	class default_location implements HL7Location {

		function __construct() {

		}
		function run($configuration,$location) {
			echo 'suck it ';
			return false;
		}
	}