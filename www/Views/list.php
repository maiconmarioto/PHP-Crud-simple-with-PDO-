<div class="col s12 m12 l9 offset-l1 ">
    <table class="bordered highlight centered responsive-table">
        <thead>
        <tr>
            <th data-field="id">ID</th>
            <th data-field="name">Name</th>
            <th data-field="email">Email</th>
            <th>Actions</th>
        </tr>
        </thead>

        <tbody>
        <?php
        $user = new \Models\User;
        $users = $user->read();
        foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user->id; ?></td>
            <td><?php echo $user->name; ?></td>
            <td><?php echo $user->email; ?></td>

            <td><a href="?p=update&id=<?php echo $user->id; ?>" class="btn-floating waves-effect material-icons waves-light blue"><i class="material-icons left">mode_edit</i></a>
                <a href="?action=delete&id=<?php echo $user->id; ?>" class="btn-floating waves-effect material-icons waves-light red"><i class="material-icons left">delete</i></a>
            </td>
        </tr>
        <?php endforeach;?>
        </tbody>
    </table>
    <br>
    <a href="?p=create" class="btn-floating waves-effect material-icons waves-light teal right"><i
            class="material-icons">add</i></a>
</div>
