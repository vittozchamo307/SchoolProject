<?php
$repo_name = "schoolproject";
$username = "username123456";
$password = "password123456";

// Initialize GitHub library
require_once("vendor/autoload.php");

// Authenticate with GitHub
try {
    $github = new GitHub($username, $password);
} catch (GitHub\AuthenticationException $e) {
    echo "Authentication failed: " . $e->getMessage();
}

// List repositories for the authenticated user
$repos = $github->getRepositories();

foreach ($repos as $repo) {
    if ($repo->getName() == $repo_name) {
        $owner = $repo->getOwner()->getName();
        $private = $repo->isPrivate();
        echo "Repository: {$owner}, Username: {$username}, Repositories: {$private} (public only)" . PHP_EOL;
    }
}

echo "All repositories listed:" . PHP_EOL;
?>
