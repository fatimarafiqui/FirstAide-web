<?php
/*
 * Date       : 9-03-2017
 * Created by : Fatima Rafiqui
 * 
 * Note       : Please do not commit your credentials
 */
$_settings['reCaptcha'] = array();
$_settings['reCaptcha']['client_key'] = '6LeAOhUUAAAAAKxj0kEhUUdxTGw4SQI-7LbTNHso';
$_settings['reCaptcha']['server_key'] = '6LeAOhUUAAAAAO4R5aYPuOXlmqlIILm9FWjHtjTK';

$_settings['twilio'] = array();
$_settings['twilio']['account_sid'] = 'AC02b5e7eff09d776e4fa15963cbdecf8e';
$_settings['twilio']['auth_token'] = '6d8d7004108d2ff1fcb4dccbb357edcb';
$_settings['twilio']['number'] = '+12158743846';

//'heroku' for production, 'debug' for running locally
$_settings['deploy_mode'] = 'heroku';

if ($_settings['deploy_mode'] == 'heroku') {
	$clear_db_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
	$_settings['db']['hostname']= $clear_db_url["host"];
	$_settings['db']['database']= substr($clear_db_url["path"], 1);
	$_settings['db']['username']= $clear_db_url["user"];
	$_settings['db']['password']= $clear_db_url["pass"];
} else {
	$_settings['db']['hostname']= "localhost";
	$_settings['db']['database']= "firstaide_web";
	$_settings['db']['username']= "root";
	$_settings['db']['password']= "";
}
?>
