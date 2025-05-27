<?php
// Assuming $github_username and $github_token are defined elsewhere in your script

// Fetching user data from GitHub API
$user_data = get_user_data($github_username, $github_token);

// Adding a new project
$project_name = "SchoolProject";
add_project($user_data, $project_name);

// Fetching the last commit for the 'SchoolProject' project
$last_commit = get_last_commit("SchoolProject");

// Storing the repository URL and branch name in variables
$repository_url = $github_username . "/" . $project_name;
$branch_name = "master";

// Committing the project to the specified branch
commit_project_to_branch($repository_url, $branch_name);

// Returning the latest commit details
return $last_commit;
