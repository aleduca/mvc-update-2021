<h2>Lista de users (<?php echo count($users); ?>)</h2>

<ul>
    <?php foreach ($users as $user) : ?>
        <li><?php echo $user->firstName ?> <?php echo $user->lastName ?> | <a href="/user/show/<?php echo $user->id ?>">Ver user</a></li>
    <?php endforeach; ?>
</ul>