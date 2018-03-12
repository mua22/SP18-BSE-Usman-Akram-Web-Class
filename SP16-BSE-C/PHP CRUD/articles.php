<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Articles CRUD</title>
</head>
<link rel="stylesheet" href="bootstrap.css">
<body>

<!--<ul>-->
<!--    <li>Connect with db</li>-->
<!--    <li>execute Query</li>-->
<!--    <li>wrap results in HTML</li>-->
<!--</ul>-->

<?php
    include './models/article_model.php';
    foreach (getArticles() as $article){
        echo "<h3>{$article['title']}</h3>";
        echo "<a href='delete.php?id={$article['id']}'>Delete</a>";
        echo "<div>{$article['content']}</div>";
        echo "<hr>";
    }
?>

<hr>
<form action="edit.php">
    <input type="text" name="id">
    <input type="submit">

</form>
</body>
</html>