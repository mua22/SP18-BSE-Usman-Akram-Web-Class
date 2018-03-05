<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        p{
            background-color: #0c5460;
        }
    </style>
</head>
<body>
<h1>My First PHP page</h1>
<?php
    echo "<p>This is from PHP</p>";
    echo time();
    echo "<br>";
    echo date('d-M-Y');
?>
</body>
</html>