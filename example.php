<?php
	include 'Emailage.class.php';
	//$account_sid = 'My Account SID'; // Change me to your Account SID, found by logging into your account on Emailage Sandbox or Live API site.
	//$authToken = 'My Auth Token'; // Change me to your Auth Token
	$testEmail = 'example@example.com'; // The email address you want this script to validate.
	$testIP = '127.0.0.1'; // The IP address you want this script to validate.
	
	$Emailage = new Emailage($account_sid, $authToken);
	
	/**
	 * Feel Free to Modify any of the settings below to match what you need
	 */
		$sandbox = TRUE; // Do I connect to the Sandbox or FALSE for the live system
		$format = 'json'; // What format do I want returned ?  json or xml ?
		$signature_method = 'sha1'; // What Encrption Method do I want to use ? Alowed types ('sha1', 'sha256', 'sha384', 'sha512')
		$validate_response = TRUE; // Should the SDK Validate the response and throw an error if an error is found?
		$return_parsed_result = TRUE; // Do I want my results returned to me already formatted. I.E. Already turned into Simple XML Object or JSON Object ?
		
		$Emailage->changeSetting('format', $format);
		$Emailage->changeSetting('sandbox', $sandbox);
		$Emailage->changeSetting('signature_method', $signature_method);
		$Emailage->changeSetting('validate_response', $validate_response);
		$Emailage->changeSetting('return_parsed_result', $return_parsed_result);
		
	/**
	 * Dealing with Additional Parameters to the Query Call.
	 * 
	 * QueryEmail, QueryIPAddress and QueryEmailAndIpAddress all take an additional array of parameter settings for you to give more details on.
	 * 
	 * firstname 
	 * lastname
	 * billcity
	 * billregion
	 * billpostal
	 * billcountry
	 * shipaddress
	 * shipcity
	 * shipregion
	 * shippostal
	 * shipcountry
	 * phone
	 * transamount
	 * transcurrency
	 * user_email -- This needs to be an Email that is associated to a department you setup in Emailage.
	 * transorigin
	 * existingcustomer
	 * useragent
	 * acceptlang
	 * urid -- ID that designates the user associated to the email address in your system.
	 * 
	 * Uncomment and modify the parameters to test them out.
	 */
		$params = Array();
		//$params['firstname'] = 'Sam';
		//$params['lastname'] = 'Smith';
		//$params['billcity'] = 'somewhere';
		//$params['billregion'] = 'region';
		//$params['billpostal'] = '44444';
		//$params['billcountry'] = 'US';
		//$params['shipaddress'] = '111 no where lane';
		//$params['shipcity'] = 'somewhere';
		//$params['shipregion'] = 'region';
		//$params['shippostal'] = '44444';
		//$params['shipcountry'] = 'US';
		//$params['phone'] = '9995551212';
		//$params['transamount'] = '100.92';
		//$params['transcurrency'] = 'US';
		//$params['user_email'] = '';
		//$params['transorigin'] = 'somewhere';
		//$params['existingcustomer'] = 'NO';
		//$params['useragent'] = 'Mozilla/5.0 (Macintosh; PPC Mac OS X x.y; rv:10.0) Gecko/20100101 Firefox/10.0';
		//$params['acceptlang'] = 'EN';
		//$params['urid'] = '1234';

	/**
	 * To use this Script, just un-comment one line at a time by removing the //
	 */
	
	/**
	 * For Validating Email and/or IP Address, without providing a User Record ID.
	 * 
	 */
		//$results = $Emailage->QueryEmail($testEmail);
		//$results = $Emailage->QueryIpAddress($testIP);
		//$results = $Emailage->QueryEmailAndIpAddress($testEmail, $testIP);
	
	/**
	 * For Validating Email and/or IP Address, with Additional Parameters
	 */
		//$results = $Emailage->QueryEmail($testEmail, $params);
		//$results = $Emailage->QueryIpAddress($testIP, $params);
		//$results = $Emailage->QueryEmailAndIpAddress($testEmail, $testIP, $params);
		
	/**
	 * Flagging an Email Address.
	 * 
	 * The fraudcodeID is ONLY required when the flag is "fraud". Possible values are:
		1 Card Not Present Fraud
		2 Customer Dispute (Chargeback)
		3 First Party Fraud
		4 First Payment Default
		5 Identify Theft (Fraud Application) 6 Identify Theft (Account Take Over) 7 Suspected Fraud (Not Confirmed) 8 Synthetic ID
		9 Other
	 */
	
		//$results = $Emailage->FlagEmailAsFraud($testEmail, 9);
		//$results = $Emailage->RemoveFlagFromEmail($testEmail);
		//$results = $Emailage->FlagEmailAsGood($testEmail);
	
	print_r($results);
	
?>