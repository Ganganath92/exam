<?php

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\EmailField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\Form;
use SilverStripe\Control\Email\Email;
use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;
// use Page;
// use PageController;

 //Ganganath Gunawardane - item 9, 10
class ContactPage extends Page 
{
    

    private static $db = array(
		'Name' => 'Varchar',
		'Email' => 'Varchar',
		'Message' => 'Varchar'
    );
    private static $searchable_fields = array(
		'Name',
		'Email',
		'Message'
    );
    private static $summary_fields = array(
		'Name',
		'Email',
		'Message'
	);
    
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


    public function submit($data, $form) 
    { 
        $ContactPage = new ContactPage();
        $ContactPage = ContactPage::create();
        $ContactPage->Name = $data['Name'];
        $ContactPage->Email = $data['Email'];
        $ContactPage->Message = $data['Message'];
        $ContactPage->write();

        $email = new Email(); 
         
        $email->setTo('ganganathupul@gmail.com'); 
        $email->setFrom($data['Email']); 
        $email->setSubject("Contact Message from {$data["Name"]}"); 
         
        $messageBody = " 
            <p><strong>Name:</strong> {$data['Name']}</p> 
            <p><strong>Message:</strong> {$data['Message']}</p> 
        "; 
        $email->setBody($messageBody); 
        $email->send(); 
        return [
            'Content' => '<p>Thank you for your feedback.</p>',
            'Form' => ''
        ];
    }
}
 //Ganganath Gunawardane - item 9, 10