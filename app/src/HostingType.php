<?php

use SilverStripe\ORM\DataObject;
// use HostingContract;
use SilverStripe\Forms\RequiredFields;

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

//Ganganath Gunawardane - item 4
class MinPriceFields extends RequiredFields {

    protected $minPrice = [];

    /**
     * Constructor
     */
    public function __construct() {
        $required = func_get_args();
        if(isset($required[0]) && is_array($required[0])) {
            $required = $required[0];
        }
        $this->minPrice = $required;
        parent::__construct($required);
    }

    function php($data) {
        $valid = parent::php($data);

        if (!is_numeric($data[$this->minPrice[0]])) {
            $this->validationError(
                $this->minPrice[0], 'Not a number. Your number must be greater than or equal to 5', 'validation', false
            );
            $valid = false;
        } elseif ($data[$this->minPrice[0]] < 5) {
            $this->validationError(
                $this->minPrice[0], 'Your number must be greater than or equal to 5', 'validation', false
            );
            $valid = false;
        }
        return $valid;
    }
}
//Ganganath Gunawardane - item 4
