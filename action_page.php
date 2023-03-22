<?php
// define variables and set to empty values
$email = $psw = $repeat_psw = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = test_input($_POST["email"]);
  $psw = test_input($_POST["psw"]);
  $repeat_psw = test_input($_POST["repeat_psw"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>