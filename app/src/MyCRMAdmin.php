<?php

use SilverStripe\Admin\ModelAdmin;
// use Customer;
// use HostingContract;
// use HostingType;

class MyCRMAdmin extends ModelAdmin {

	private static $managed_models = array(
        Customer::class,
        HostingContract::class,
        HostingType::class
	);

    private static $url_segment = 'mycrm';
    private static $menu_title = 'My CRM';

	public function SearchClassSelector() {return "dropdown";}
}
