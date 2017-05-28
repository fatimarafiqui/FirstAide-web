<?php
/*Created by Akanksha
  Desc: Connection to mysql db for use in other files*/
    
    //change the credentials here according to the server used
	$connection = mysqli_connect(
		$_settings['db']['hostname'],
		$_settings['db']['username'],
		$_settings['db']['password'],
		$_settings['db']['database']
	) or die("Connection failed");
?>