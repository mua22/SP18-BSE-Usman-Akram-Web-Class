<h2>
    Displaying Destinations
</h2>

<?php
include './models/destinations_model.php';
$destinations = getAllDestinations(3);

?>
<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($destinations as $destination){ ?>
            <tr>
                <td><?php echo $destination['id'];?></td>
                <td><?php echo $destination['title'];?></td>
                <td><a href="Delete" class="btn btn-danger">Delete</a><a href="Delete" class="btn btn-info">Edit</a></td>

            </tr>
        <?php }?>
    </tbody>
</table>
