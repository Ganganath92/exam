<?php

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\EmailField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\Form;
use Page;
use PageController;

class ContactPage extends Page 
{
}
class ContactPageController extends PageController 
{
    private static $allowed_actions = ['Form'];
    public function Form() 
    { 
        $fields = new FieldList( 
            new TextField('Name'), 
            new EmailField('Email'), 
            new TextareaField('Message')
        ); 
        $actions = new FieldList( 
            new FormAction('submit', 'Submit') 
        ); 
        return new Form($this, 'Form', $fields, $actions); 
    }
}