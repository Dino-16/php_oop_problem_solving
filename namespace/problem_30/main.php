<?php

/*
Problem 30: The Modular Admin Dashboard Hierarchy
Scenario: You are organizing a large system. You want to make sure your structural classes (like a Template renderer) 
are clearly separated between the front-facing website and the hidden back-end admin panel.

Task: Create a sub-namespaced architecture.

Requirements:

Create a namespace App\Frontend with a class Page that prints "Loading public theme...".

Create a namespace App\Admin with a class Page that prints "Loading secure admin layout...".

Challenge: Write a script that uses the fully qualified class name 
(the absolute path starting with a backslash, e.g., \App\Admin\Page) to load the admin page layout directly without using a use statement at the top.

*/

require_once "Frontend/Page.php";
require_once "Admin/Page.php";

use App\Frontend\Page as FrontPage;

$frontPage = new FrontPage();
echo $frontPage->loader();

$adminPage = new App\Admin\Page();
echo $adminPage->loader();