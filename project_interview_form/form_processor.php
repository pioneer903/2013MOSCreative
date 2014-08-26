<?php
//Initialize the $query_string variable for later use
$query_string = "";

//If there are POST variables
if(isset($_POST['email'])) {

	// EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "yuriy@moscreative.com";
    $email_subject = "Project Interview Form Submition";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['description'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $phone = $_POST['phone']; // not required
    $description = $_POST['description']; // required
    $company = $_POST['company']; //not required
    $project_scope = $_POST['00NU00000038is3']; //not required
    $budget = $_POST['00NU00000038gb4']; //not required
    $due_date =  $_POST['00NU00000038is8']; //not required
    $website = $_POST['URL']; //not required
        
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
  if(strlen($description) < 2) {
    $error_message .= 'The description you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Company: ".clean_string($company)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "Website: ".clean_string($website)."\n";
    $email_message .= "Project Scope: ".clean_string($project_scope)."\n";
    $email_message .= "Description of a project: ".clean_string($description)."\n";
    $email_message .= "Budget: ".clean_string($budget)."\n";
    $email_message .= "Due Date: ".clean_string($due_date)."\n";
    
     
     
	// create email headers
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);  
	
	
	
	
	
	//Initialize the $kv array for later use
	$kv = array();
	
	//For each POST variable as $name_of_input_field => $value_of_input_field
	foreach ($_POST as $key => $value) {
		//Set array element for each POST variable (ie. first_name=Arsham)
		$kv[] = stripslashes($key)."=".stripslashes($value);
	}
	
	//Create a query string with join function separted by &
	$query_string = join("&", $kv);
}//end if(isset($_POST['email']))
	
	
	//Check to see if cURL is installed ...
	if (!function_exists('curl_init')){
		die('Sorry cURL is not installed!');
	}
	
	//The original form action URL from Step 2 :)
	$url = 'https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8';
	
	//Open cURL connection
	$ch = curl_init();
	
	//Set the url, number of POST vars, POST data
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, count($kv));
	curl_setopt($ch, CURLOPT_POSTFIELDS, $query_string);
	
	//Set some settings that make it all work :)
	curl_setopt($ch, CURLOPT_HEADER, FALSE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, FALSE);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	
	//Execute SalesForce web to lead PHP cURL
	$result = curl_exec($ch);
	
	//close cURL connection
	curl_close($ch);
	?>