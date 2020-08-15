<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;
// use HostingContract;

class Customer extends DataObject {

    private static $db = array(
		'FirstName' => 'Varchar',
		'Surname' => 'Varchar',
		'Email' => 'Varchar',
		'CustomerType' => "Enum('Private,Business','Private')"
	);

    private static $has_one = array(
		'Avatar' => Image::class,
	);

    private static $has_many = array(
		'HostingContracts' => HostingContract::class,
	);

    private static $summary_fields = array(
		'FirstName',
		'Surname',
		'CustomerType'
	);

    private static $searchable_fields = array(
		'FirstName',
		'Surname',
		'HostingContracts.ContractNumber'
	);
}
