<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mystyles.css">
</head>
<body>
<ul id="menu">
    <li class="menuItem btn btn-warning"><a href="index.php">Destinations</a></li>
    <li class="menuItem"><a href="index.php?show=countries">Countries</a></li>

</ul>

<?php
    if(isset($_REQUEST['show'])){
        include './countries.php';
    }else
include './destinations.php'; ?>

</body>
</html>