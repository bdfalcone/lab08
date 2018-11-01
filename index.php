<?php

/*
 * Author: Ben Falcone
 * Date: November 1, 2018
 * Name: index.php
 * Description: short description about this file
 */

//include code in vendor/autoload.php file
require_once ("vendor/autoload.php");

//create an object of UserController
$user_controller = new UserController();

//add your code below this line to complete this file

require 'vendor/autoloader.class.php';

$user_controller = new UserController();

//default action is list all the toys
$action = "all";

if(isset($_GET['action]']) && $_GET['action]'] != '') {
    $action = $_GET['action'];
}

//invoke different mathod

if($action == "all") {
    $user_controller->all();
} else if($action == 'error') {
    //default error message
    $message = "We are sorry, but an error has occured.";
    
    ///retrieve the error message
    if(isset($_GET['message']) && $_GET['message'] != '') {
        
    }
    
    //display the error message
    $user_controller->error($message);
} else {
    $message = "Invalid action was requested";
    $user_controller->error($message);
}
