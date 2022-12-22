<?php
	class ConfigDb
	{
		protected $servername,$username,$password;

		function configdb()
		{
			$this->servername = "localhost";
			$this->username = "root";
			$this->password = "";
		}
	}
	
?>
