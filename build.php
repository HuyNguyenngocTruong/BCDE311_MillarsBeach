<?php
require_once 'siteFunctions/commonFunctions.php';
require_once 'siteFunctions/masterPage.php';
require_once 'framework/MySQLDB.php';

	try {
		$db=getNewDatabase();
		$db->execute( "drop table if exists userInfo");
	   
		$db->execute( "Create Table userInfo (
            userID int auto_increment Primary Key,
            firstName nvarchar (50),
            lastName nvarchar (50),
            email varchar(100),
            userName varchar (50) Unique Not Null,
            mobileNum int(12),
            password varchar(255) Unique Not Null,
            createdAt Timestamp
        ) engine=innoDB;");
	   	
		$db->execute( "drop table if exists Content");
		$db->execute( "Create Table Content (
            userID int primary key auto_increment,
            Description varchar (255),
            Titile varchar (50) not null,
            ImageLink varchar (255),
            createdAt Timestamp,
            foreign key (userID) references userInfo (userID) 
        ) engine=innoDB; ");
						 
		$db->execute( "drop table if exists ContactUs");
		$db->execute( "Create Table ContactUs (
            id int auto_increment primary key,
            firstName nvarchar (50),
            lastName nvarchar (50),
            email varchar(100),
            message varchar (255),
            hearAboutUs varchar (25),
            createdAt Timestamp
        ) engine=innoDB;");

		$content='<p>The database has been built.</p>';
		
		$pg=new MasterPage();
		$pg->setTitle('Database build/rebuild');
		$pg->setContent($content);
		print $pg->getHtml();
		
	} catch (exception $ex) {
		print $ex;
	}