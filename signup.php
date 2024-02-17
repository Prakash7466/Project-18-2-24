<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', '127.0.0.1', '', 'prakash');

$name = mysqli_real_escape_string($db, $_POST['name']);
$number = mysqli_real_escape_string($db, $_POST['number']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$confirmpassword = mysqli_real_escape_string($db, $_POST['confirmpassword']);


