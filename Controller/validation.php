<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  //validate registre_email
  $email = $_POST['email_value'];
  $isEmail = filter_var($email, FILTER_VALIDATE_EMAIL) !== false;

  $integer = $_POST['integer_value'];
  $isInteger = filter_var($integer, FILTER_VALIDATE_INT) !== false;

  requiere __DIR__.'/../Views/validation_result.php';
  return;
}

requiere __DIR__.'/../Views/validation.php';

 ?>
