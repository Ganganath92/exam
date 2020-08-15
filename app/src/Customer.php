<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\EmailField;
// use HostingContract;

class Customer extends DataObject {



	//Ganganath Gunawardane - item 1
    public function getCMSFields() {
        
		$fields = parent::getCMSFields();

		//Ganganath Gunawardane - item 5
		$fields->replaceField('Email', EmailField::create('Email','Email'));
		//Ganganath Gunawardane - item 5

        if($grid = $fields->dataFieldByName('HostingContracts')){
            $grid->getConfig()
                ->removeComponentsByType('SilverStripe\Forms\GridField\GridFieldImportButton');
		}
        return $fields;
	}
    //Ganganath Gunawardane - item 1

    private static $db = array(
		'FirstName' => 'Varchar',
		'Surname' => 'Varchar',
		'Email' => 'Varchar',
		'CustomerType' => "Enum('Private,Business','Private')"
	);

    private static $has_one = array(
		'Avatar' => Image::class,
	);
//Ganganath Gunawardane - item 8
    private static $has_many = array(
		'HostingContracts' => HostingContract::class,
		'Transaction' => Transaction::class,
	);
//Ganganath Gunawardane - item 8 
    private static $summary_fields = array(
		'FirstName',
		'Surname',
		'CustomerType'
	);
	//Ganganath Gunawardane - item 6
    private static $searchable_fields = array(
		'FirstName',
		'Surname',
		'HostingContracts.ContractNumber',
		'HostingContracts.HostingType.Title'
	);
	//Ganganath Gunawardane - item 6
}
