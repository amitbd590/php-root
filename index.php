<?php include 'header.php'; ?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- bootstrap -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">

    <title> </title>
</head>

<body>


    <div class="container">


        <header class="head">

            <div class="logo">
                <h1>PHP BODY</h1>
                <h2>This is Full PHP Server!</h2>
            </div>
            <hr>


        </header>

        <?php include 'form.php'; ?>


        <section>

            <?php
    
   date_default_timezone_set('asia/dhaka');
    echo date("h:i:sa");
    
    
    
    ?>

        </section>


        <?php 'footer.php'; ?>