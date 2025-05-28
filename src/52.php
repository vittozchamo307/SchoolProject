<?php
// This PHP script uses GitHub actions to install a package and run a command.
// It will install the 'nodejs' package using npm, then execute a simple command to check if it's installed.

use phpunit/phpbb;

// Install node.js version 18.7.0 via npm
npm install -g nodejs:legacy --quiet

// Use PHPUnit to run basic tests
phpunit --coverage-clover=coverage.clover --coverage=junit --bootstrap=./config.php

?>
