<?php
if(isset($_POST['add-school'])){
  //Get the form data and remove the white space

  if(!isset($_POST['schoolName']) ||
      !isset($_POST['state']) ||
      !isset($_POST['schoolType']) ||
      !isset($_POST['ownership']) ||
      !isset($_POST['address']) ||
      !isset($_POST['year']) ||
      !isset($_POST['contact'])
  ){
    echo "Oops! There was a problem with your submission. Complete the form and try again.";
    die();
  }


  $name = $_POST['schoolName'];
  $state = $_POST['state'];
  $schoolType = $_POST['schoolType'];
  $ownership = $_POST['ownership'];
  $address = $_POST['address'];
  $year = $_POST['year'];
  $contact = $_POST['contact'];

  function clean_string($string){
    $bad = array("content-type", "bcc:", "to:", "cc:");
    return str_replace($bad, "", $string);
  }

  //Setup email recipient and content.

  $recipient = 'noblejoeuc@gmail.com';

  $subject = 'Add New School for the Deaf';

  $email_content = "School Name: ".clean_string($name)."\r\n";
  $email_content .= "State: ".clean_string($state)."\r\n";
  $email_content .= "School Type: ".clean_string($schoolType)."\r\n";
  $email_content .= "Ownership: ".clean_string($ownership)."\r\n";
  $email_content .= "Address: ".clean_string($address)."\r\n";
  $email_content .= "Year: ".clean_string($year)."\r\n";
  $email_content .= "Contact: ".clean_string($contact)."\r\n";


  //Build the email headers
  $email_headers = 'From: schools@schoolsforthedeaf.org.ng'."\r\n".
                    'Reply-To: info@afriknet.com'."\r\n".
                    'X-Mailer: PHP/'.phpversion();


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

}
