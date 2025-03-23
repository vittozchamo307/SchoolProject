<?php
// Connect to GitHub API
$gclient = new \GitHub\Api\Client('https://api.github.com');
$grepo = $gclient->getRepository('schoolProject');

// Get the username and repository name from the response
$username = $grepo->getOwner()->getName();
$repositoryName = $grepo->getName();

// Create a Git command to get code from the local repo
$gitcommand = "echo 'Your code here' | git rev-parse --short HEAD";

// Execute the Git command and print the output
$gitoutput = $gclient->runCommand($github['login'], $repositoryName, $username, $gitcommand)->execute();

// Write the output to a file if it exists
if (file_exists('local_code.txt')) {
    file_put_contents('local_code.txt', $gitoutput);
}
