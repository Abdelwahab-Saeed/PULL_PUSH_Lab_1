<?php
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if ($name && $email && $password) {
    echo "Registration Successful.";
} else {
    echo "Please fill in all required fields.";
}
?>