<?php

require_once 'framework/MySQLDB.php';
require_once 'EntityModel.php';

class ContactUsInfoModel extends EntityModel
{
    public function __construct($db,$ID)
    {
        parent::__construct($db, 'User'); 
        $this->defineKey('id', $ID);
        $this->defineField('FirstName');
        $this->defineField('LastName');
        $this->defineField('Email');
        $this->defineField('Message');
		$this->defineField('HearAboutUs');
        $this->defineField('DateCreate');
        if ($ID!=null) {
          parent::load();
        }
    }

    public function setFirstName($value) {
		parent::setValue('FirstName',"'$value'");
	}

    public function setLastName($value) {
		parent::setValue('LastName',"'$value'");
	}

    public function setEmail($value) {
		parent::setValue('Email',"'$value'");
	}

    public function setMessage($value) {
		parent::setValue('Message',"'$value'");
	}

    public function setDateCreate($value) {
		parent::setValue('CreatedAt',"'$value'");
	}

	
    public function setHearAboutUs($value) {
		parent::setValue('Message',"'$value'");
	}


    public function getFirstName() {
		parent::getValue('FirstName');
	}

    public function getLastName() {
		parent::getValue('getLastName');
	}

    public function getMessage() {
		parent::getValue('Message');
	}

    public function getEmail() {
		parent::getValue('Email');
	}

    public function getHearAboutUs() {
		parent::getValue('HearAboutUs');
	}
    
    public function getDateCreate() {
		return parent::getValue('DateCreate');
	}
}

?>
