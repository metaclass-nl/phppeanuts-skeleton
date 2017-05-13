<?php

		//set this to your development host name
//		$this->errorHandler->developmentHost = 'localhost';
		ini_set('display_errors', (int) $this->errorHandler->isDevelopment() ); //set this to 1 for initial testing of a new installation
		
		if(function_exists('date_default_timezone_set'))
			date_default_timezone_set('yourDateTimeZone');
		setLocale(LC_ALL, 'en_US', 'american'); //needed for datefunctions - phpPeanuts does its own conversions
		
//you need to replace these settings 
		$this->tokenSalt = 'yourTokenSalt'; //replace this with you own random string 
			
		$dbc = new DatabaseConnection();
		$dbc->setUsername('yourDatabaseUser'); 
		$dbc->setPassword('yourDatabaseUsersPassword');
	//for PntDboDao (now the default superclass of QueryHandler with mysql: (the default dsnPrefix)   
		$dbc->setDsnBody('localhost;port=3306;dbname=yourpeanutsdatabase;charset=latin1'); //Warning: charset may be ignoored, see readme.html
	//for PntDboDao with Sqlite
		//$dbc->setDsnPrefix('sqlite:');
		//$dbc->setDsnBody('pathToYourDatabaseFile');
	// for PntMysqlDao and PntSqliteDao
		//$dbc->setDatabaseName("yourpeanutsdatabase"); 
		//$dbc->setCharset("latin1"); 
		//with PntSqliteDao put the path to the database file below instead of localhost
		//$dbc->setHost("localhost");
		//specific to PntMysqlDao
		//$dbc->setPort("3306");
		
		$dbc->makeConnection();

//when using the authentication plugin, the following is recommended:
//		ini_set('session.use_only_cookies', '1');
//		ini_set('session.cookie_httponly', '1');

//these settings are optional - defaults are shown below
//		$this->baseUrl = null; //may be set to: 'http://yourServer/yourPeanutsPath/'; 
//	 	$this->debugMode = 'short'; //options: '', 'short', 'verbose'

?>