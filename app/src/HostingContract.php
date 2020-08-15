<?php

use SilverStripe\ORM\DataObject;
// use Customer;
// use HostingType;

class HostingContract extends DataObject {

	private static $db = array(
		'ContractNumber' => 'Varchar',
		'StartDate' => 'Date',
		'EndDate' => 'Date'
	);

    private static $has_one = array(
		'Customer' => Customer::class,
		'HostingType' => HostingType::class,
	);

    private static $summary_fields = array(
		'ContractNumber',
		'EndDate'
	);
}
