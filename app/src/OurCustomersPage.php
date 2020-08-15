<?php
//Ganganath Gunawardane - item 7
class OurCustomersPage extends Page
{
    private static $has_many = array(
        'Customer' => Customer::class
    );

    public function Customers()
    {
        $customers = Customer::get();

        if(!$customers) {
            return $this->httpError(404,'That Customers could not be found');
        }

        return $customers;
    }
}
//Ganganath Gunawardane - item 7