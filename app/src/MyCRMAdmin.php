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
            // Ganganath Gunawardane  - item 3
            $form->Fields()
                ->fieldByName($this->sanitiseClassName($this->modelClass))
                ->setTitle('Client');
            // Ganganath Gunawardane  - item 3

             // Ganganath Gunawardane  - item 2
             $form->Fields()
             ->fieldByName($this->sanitiseClassName($this->modelClass))
             ->getConfig()->getComponentByType('SilverStripe\Forms\GridField\GridFieldPaginator')->setItemsPerPage(10);
            // Ganganath Gunawardane  - item 2
           
            $form->Fields()
                ->fieldByName($this->sanitiseClassName($this->modelClass))
                ->getConfig()
                ->removeComponentsByType('SilverStripe\Forms\GridField\GridFieldImportButton');
        }
        return $form;
    }
    //Ganganath Gunawardane - item 1

  //Ganganath Gunawardane - item 8 ,9, 10
	private static $managed_models = array(
        Customer::class,
        HostingContract::class,
        HostingType::class,
        ContactPage::class,
        Transaction::class
	);
//Ganganath Gunawardane - item 8
    private static $url_segment = 'mycrm';
    private static $menu_title = 'My CRM';

	public function SearchClassSelector() {return "dropdown";}
}
