<?php

require_once 'framework/MySQLDB.php';
require_once 'EntityModel.php';

class UserModel extends EntityModel
{
    public function __construct($db,$userID)
    {
        parent::__construct($db, 'User'); // Set the table name to 'buyer'
        $this->defineKey('UserID', $userID);
        $this->defineField('userName');
        $this->defineField('FirstName');
        $this->defineField('LastName');
        $this->defineField('PhoneNumber');
        $this->defineField('Email');
        $this->defineField('Password');
        $this->defineField('CreatedAt');
        if ($userID!=null) {
          parent::load();
        }
    }

    public function setUserName($value) {
		parent::setValue('userName',"'$value'");
	}

    public function setFirstName($value) {
		parent::setValue('FirstName',"'$value'");
	}

    public function setLastName($value) {
		parent::setValue('LastName',"'$value'");
	}

    public function setPhoneNumber($value) {
		parent::setValue('PhoneNumber',"'$value'");
	}

    public function setEmail($value) {
		parent::setValue('Email',"'$value'");
	}

    public function setPassword($value) {
		parent::setValue('Password',"'$value'");
	}

    public function setDateCreate($value) {
		parent::setValue('CreatedAt',"'$value'");
	}


  function getID() {
		return parent::getID();
	} 

  public function getUserName() {
		return parent::getValue('userName');
	}

    public function getFirstName() {
		parent::getValue('FirstName');
	}

    public function getLastName() {
		parent::getValue('getLastName');
	}

    public function getEmail() {
		parent::getValue('Email');
	}

    public function getPassword() {
		parent::getValue('Password');
	}
    
    public function getDateCreate() {
		return parent::getValue('CreatedAt');
	}
}

?>
