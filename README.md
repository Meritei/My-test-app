# My-test-app
This is a test application for  RaphOwino  in which am supporsed to:

Part 1: Initial Setup
Create a new laravel Project. 
Edit README file appropriately.
Make a commit and push to github.

Part 2: Authentication
Add socialite and dingo/api packages. 
Register a github developer application and note the api keys. 
Create a new angular project and pull in bootstrap and satellizer
Use github to authenticate a user, create an account in Laravel and generate a jwt token to identify the user. 
Commit this as feature-authentication and push to github. 
Test that a user can log in and is redirected to dashboard. Write a simple report and include link of github repository.

Part 3: Sync with Github
Add the github package in Laravel
Change the oauth from registration and request access to repositories as well as issues
Get all the users repositories and create new projects for each. Project details include: 
name =>humanized version of repo name i.e  if /user/my_repo then My Repo 
slug  => repo name i.e  if /user/my_repo then my_repo 
desc => readme.md
For each repo, get list of collaborators and add them as users in the project. Send out invites to each to activate their accounts. Track by email address.
For each repo, use milestones to create tasks for the project
For each milestone, check issues and create subtasks of the milestone task
For all other issues create tasks
For each task, assign to the issue owner or creator of the issue if no one is assigned.
Commit this as feature-sync-from-github

Part 4: Basic Crud
Allow a user to create a new project with the details:
name
slug
desc
Create a new repo in github with name = slug
Allow user to add new tasks. For each task create an issue in github.
Allow users to edit project name and desc. Update on desc updates the readme file. Use https://github.com/sofish/pen to edit the markdown. On slug update, change the github repo name as well.
On delete, delete the repo as well.

Part 5. Extras
A few extras that would be nice to have:
Use webhooks to update the status of the project on every github event e.g. issue updated, etc
A dashboard listing all issues assigned to the user from all projects


