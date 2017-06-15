<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forum</title>
    <link href="css/styles.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Chivo' rel='stylesheet'>

    <?php
    include "database/databasetalk.php";
    $database = new database();
    ?>

</head>

<body>

<div id="logo">
    <img class="logo" src="images/logo.jpg" />
</div>

<nav id="navigation">
    <?php include "nav.php"; ?>
</nav>