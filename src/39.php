<?php
// This PHP code demonstrates how to use the GitHub API to fetch user repositories.
// The API endpoint is https://api.github.com/user/repos.

// Initialize Composer autoloader and create a new instance of GitHubApi
$composer_autoloader = ComposerAutoloader::getInstance();
$github_api = $composer_autoloader->getComposerAutoloaderInstance();

// Fetch the user's repositories using the GitHub API
$response = $github_api->repos('user', 'api.github.com/repositories');

// Print the fetched repository details
var_dump($response);
?>
