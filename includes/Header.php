<?php require_once("database/DBConnection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <script src="public/bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="public/bootstrap/js/bootstrap.js"></script>

    <script type="text/javascript" src="public/bootstrap/js/Main.js"></script>
    <script type="text/javascript" src="public/bootstrap/js/Manage.js"></script>

    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/bootstrap/css/Style.css">
    <link rel="stylesheet" href="public/bootstrap/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="VirtualCourseFiles.php">Virtual Course Files</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="Dashboard.php">Dashboard<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Logout</a>
            </li>
        </ul>
    </div>
</nav>