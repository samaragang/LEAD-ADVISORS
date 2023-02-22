<?php

// Validate form data
if (empty($_POST['email'])) {
  $response = array(
    'status' => 'error',
    'message' => 'Please fill out all fields.'
  );
  echo json_encode($response);
  exit;
}


$email = $_POST['email'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $response = array(
    'status' => 'error',
    'message' => 'Please enter a valid email address.'
  );
  echo json_encode($response);
  exit;
}

// Save data to database or other storage mechanism


// Send response to client
$response = array(
  'status' => 'success',
  'message' => 'Thank you for subscribing!'
);
echo json_encode($response);

?>
