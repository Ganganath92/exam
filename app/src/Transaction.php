<?php

use SilverStripe\ORM\DataObject;
// use Customer;
//Ganganath Gunawardane - item 8
class Transaction extends DataObject {

	private static $db = array(
		'TransactionNumber' => 'Varchar',
		'TransactionDatetime' => 'Datetime'
	);

    private static $has_one = array(
		'Customer' => Customer::class
	);

}
//Ganganath Gunawardane - item 8