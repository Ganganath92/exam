<?php

use SilverStripe\ORM\DataObject;
use HostingContract;

class HostingType extends DataObject {

	private static $db = array(
		'Title' => 'Text',
		'Description' => 'Text', 
		'Price' => 'Float', 
	);

	private static $has_many = array(
		'HostingContracts' => HostingContract::class,
	);
}
