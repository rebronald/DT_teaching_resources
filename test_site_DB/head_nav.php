<!DOCTYPE HTML>

<html lang="en">
    
<?php
    
    session_start();
    include("config.php");
    include("functions.php");   // include data sanitising...
    
    // Connect to database...
    
    $dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    if (mysqli_connect_errno())
        
    {
       echo "Connection failed:".mysqli_connect_error();
        exit;
    }
    
    
    
?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Book Fan Reading Log">
    <meta name="keywords" content="books, reading, log, fiction">
    <meta name="author" content="GTT">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Vanilla Reading</title>
    
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/vanilla_style.css"> 
    
</head>
    
<body>
    
    <div class="wrapper">
    
        <a href="index.php">
            <div class="box logo"  title="Vanilla Reading - Click here to go to the Home Page">
                            
            </div>    <!-- / logo -->
        </a>
        
        <div class="box banner">
            <h1>Vanilla Reading</h1>
        </div>    <!-- / banner -->

        
        <div class="box nav">
            <a href="index.php">Home</a> | 
            <a href="contact.php">Contact</a>
        </div>    <!-- / nav -->        
