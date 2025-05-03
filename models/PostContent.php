<?php

require_once 'framework/MySQLDB.php';
require_once 'EntityModel.php';

class UserModel extends EntityModel
{
    public function __construct($db,$userID)
    {
        parent::__construct($db, 'PostContent'); // Set the table name to 'buyer'
        $this->defineKey('UserID', $userID);
        $this->defineField('Description');
        $this->defineField('Title');
        $this->defineField('ImageLink');
        $this->defineField('CreatedAt');
        if ($userID!=null) {
          parent::load();
        }
    }

    public function setDescription($value) {
		parent::setValue('Description',"'$value'");
	}

    public function setTitle($value) {
		parent::setValue('Title',"'$value'");
	}

    public function setImageLink($value) {
		parent::setValue('ImageLink',"'$value'");
	}

    public function setCreatedAt($value) {
		parent::setValue('CreatedAt',"'$value'");
	}

  function getID() {
		return parent::getID();
	} 

  public function getDescription() {
		return parent::getValue('Description');
	}

    public function getTitle() {
		parent::getValue('Title');
	}

    public function getImageLink() {
		parent::getValue('ImageLink');
	}
    
    public function getDateCreate() {
		return parent::getValue('CreatedAt');
	}
}

?>
