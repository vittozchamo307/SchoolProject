<?php
$repo_name = "schoolproject"; // Replace with your own repository name
$url = "https://github.com/$repo_name"; // Replace with the URL of the project you want to clone

// Clone the GitHub repo
$repository_url = $url;
if (!file_exists($repository_url)) {
    header("Location: https://github.com/$repo_name");
} else {
    require_once 'vendor/autoload.php';
    $phpunit = new \PHPUnit\Framework\TestCase();
    $phpunit->setUp();
}
