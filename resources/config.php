<?php
 
/*
    The important thing to realize is that the config file should be included in every
    page of your project, or at least any page you want access to these settings.
    This allows you to confidently use these settings throughout a project because
    if something changes such as your database credentials, or a path to a specific resource,
    you'll only need to update it here.
*/
 
$config = array
(
    "project" => "Own Rent Car",
    "language" => "en",
    "timezone" => "Asia/Kuala_Lumpur",
    "db" => array
    (
        // (#1) localhost
        "host" => "localhost",
        "dbname" => "ownrentcar",
        "username" => "root",
        "password" => ""
        // (#2) server
        // "host" => "www.ownrentcar.com, 1433",
        // "dbname" => "ownrentcar",
        // "username" => "ownrentcar",
        // "password" => "0wnr3ntc@r"
    ),
    "url" => array
    ( 
        // (#1) localhost
        "base" => "localhost:8080"
        // (#2)server
        // "base" => "http://www.ownrentcar.com"
    ),
    "path" => array
    (
        "resources" => "/path/to/resources",
        "images" => array
        (
            "content" => $_SERVER["DOCUMENT_ROOT"] . "/images/content",
            "layout" => $_SERVER["DOCUMENT_ROOT"] . "/images/layout"
        )
    )
);
 
/*
    I will usually place the following in a bootstrap file or some type of environment
    setup file (code that is run at the start of every page request), but they work 
    just as well in your config file if it's in php (some alternatives to php are xml or ini files).
*/
 
/*
    Creating constants for heavily used paths makes things a lot easier.
    ex. require_once(LIBRARY_PATH . "Paginator.php")
*/
defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));
     
defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));
 
/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);
 
?>