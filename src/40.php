<?php
// This PHP code snippet demonstrates how to initialize a new user in GitHub.
$username = "jane_doe";
$firstName = "Jane";
$lastName = "Doe";

$user = array(
  'id' => 1234567890,
  'login' => $username,
  'email' => "$firstName$name@user.com",
  'avatar_url' => '/avatars/123/avatar.jpg',
  'url' => 'https://github.com/' . $username
);

echo "Username: " . $username;
