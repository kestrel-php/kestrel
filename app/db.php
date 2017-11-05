<?php
	/**
	* 
	*/
	//include_once "../includes/config.php";
	class DB
	{
	    protected $db;
	    protected $website_name;

		function __construct()
		{
		     
		      $this -> db = mysqli_connect('localhost','root','','remi');
		      $this -> website_name = 'globalRETURNS';

		      //$db = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
		      mysqli_select_db($this -> db,'remi');


		      //set timezone
		      date_default_timezone_set('Africa/Lagos');
			# code...
		}
	}
?>