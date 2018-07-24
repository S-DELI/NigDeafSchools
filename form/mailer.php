<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  //Get the form data and remove the white space

  $name = strip_tags(trim($_POST['schoolName']));
  $name = str_replace(array("\r", "\n"), array(" ", " "), $name);

  $state = trim($_POST['state']);
  $schoolType = trim($_POST['schoolType']);
  $ownership = trim($_POST['ownership']);
  $address = trim($_POST['address']);
  $year = trim($_POST['year']);
  $contact = trim($_POST['contact']);

  //Check that all form fields are filled
  if(empty($name) OR empty($state) OR empty($schoolType) OR empty($ownership) OR empty($address) OR empty($year) OR empty($contact)){
    //Set a bad response and exit
    http_response_code(400);
    echo 'Oops! There was a problem with your submission. Complete the form and try again.';
    exit;
  }

  //Setup email recipient and content.

  $recipient = 'noblejoeuc@gmail.com';

  $subject = 'Add New School for the Deaf';

  $email_content = "Name: $name\n";
  $email_content .= "State: $state\n\n";
  $email_content .= "School Type: $schoolType\n\n";
  $email_content .= "Ownership: $ownership\n\n";
  $email_content .= "Address: $address\n\n";
  $email_content .= "Year: $year\n\n";
  $email_content .= "Contact: $contact\n\n";

  //Build the email headers
  $email_headers = "From: $name <linkafrik2@gmail.com>";

  //Send the email
  if(mail($recipient, $subject, $email_content, $email_headers)){
    //Set success response code
    http_response_code(200);
    echo 'Thank You! Your message has been sent.';
  }else{
    //Set a 500 internal error server response code.
    http_response_code(500);
    echo 'Oops! Something weent wrong and we could not find your message';
  }

}else {
  // NOT a POST request, set a 403 forbidden response code.
  http_response_code(403);
  echo 'There was a problem with your submission, please try again later.';
}
