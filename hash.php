<?php
$password = "Password22"; // password asli dari user

// Membuat hash dengan algoritma default (bcrypt)
$hash = password_hash($password, PASSWORD_DEFAULT);

echo "Password asli: " . $password . "<br>";
echo "Password hash: " . $hash;
?>