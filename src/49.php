<?php
// Project directory path
$project_dir = "/home/user/Documents/SchoolProject";

// Git URL
$git_url = "https://github.com/username/project.git";

// Clone repository
$command = "cd $project_dir && git clone $git_url";
exec($command, $output);

// Check if cloning was successful
if (count($output) > 0) {
    echo "Repository cloned successfully.";
} else {
    echo "Failed to clone the repository.";
}
