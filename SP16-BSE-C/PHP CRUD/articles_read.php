

<?php
$db = new mysqli('localhost','root','','phpcrud');
if($db->connect_errno)
    die('Unable to connect to database ['.$db->connect_error);
$sql = 'select * from articles';
if(!$result = $db->query($sql))
{ die('There was an error running the query [' . $db->error . ']'); }
echo 'Database Connected!.<hr>';
?>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>content</th>
        <th>Actions</th>
    </tr>
    </thead>

    <tbody>

    <?php
    while($row = $result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>".$row['id']."</td><td>".$row['title'] . '</td><td>'.$row['content'].'</td>';
        echo "<td><a href='edit.php?id=' class='btn btn-primary'>Edit</a> <a href='delete.php?id=' class='btn btn-danger'>Delete</a></td></tr>";
    }
    ?>
    </tbody>
</table>

<?php
$db->close();
?>