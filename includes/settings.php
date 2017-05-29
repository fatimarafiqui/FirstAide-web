<?php
/*
 * Date       : 9-03-2017
 * Created by : Fatima Rafiqui
 * 
 * Note       : Please do not commit your credentials
 */
$_settings['reCaptcha'] = array();
$_settings['reCaptcha']['client_key'] = isset(getenv('client_key')) ? getenv('client_key') : '';
$_settings['reCaptcha']['server_key'] = isset(getenv('server_key')) ? getenv('server_key') : '';

$_settings['twilio'] = array();
$_settings['twilio']['account_sid'] = isset(getenv('account_sid')) ?  getenv('account_sid') : '';
$_settings['twilio']['auth_token'] = isset(getenv('auth_token')) ? getenv('auth_token') : '';
$_settings['twilio']['number'] = isset(getenv('number')) ?  getenv('number') : '';

//'heroku' for production, 'debug' for running locally
$_settings['deploy_mode'] = 'heroku';

if ($_settings['deploy_mode'] == 'heroku') {
	$_db_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
	$_settings['db']['hostname']= $_db_url["host"];
	$_settings['db']['database']= substr($_db_url["path"], 1);
	$_settings['db']['username']= $_db_url["user"];
	$_settings['db']['password']= $_db_url["pass"];
} else {
	$_settings['db']['hostname']= "localhost";
	$_settings['db']['database']= "firstaide_web";
	$_settings['db']['username']= "root";
	$_settings['db']['password']= "";
}
?>
