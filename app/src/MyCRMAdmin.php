<?php

use SilverStripe\Admin\ModelAdmin;
// use Customer;
// use HostingContract;
// use HostingType;

class MyCRMAdmin extends ModelAdmin {

    //Ganganath Gunawardane - item 1
    public function getEditForm($id = null, $fields = null) {
        $form = parent::getEditForm($id, $fields);

        if($this->modelClass == 'Customer') {
            $form->Fields()
                ->fieldByName($this->sanitiseClassName($this->modelClass))
                ->getConfig()
                ->removeComponentsByType('SilverStripe\Forms\GridField\GridFieldImportButton');
        }
        return $form;
    }
    //Ganganath Gunawardane - item 1

	private static $managed_models = array(
        Customer::class,
        HostingContract::class,
        HostingType::class
	);

    private static $url_segment = 'mycrm';
    private static $menu_title = 'My CRM';

	public function SearchClassSelector() {return "dropdown";}
}
