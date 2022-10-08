<?php

require 'bootstrap.php';


$tasks = $connect->query(SELECT FROM * todos);

<h1>My Tasks</h1>

<?php foreach ($tasks as $task) : ?>
    <li>
        <?php if ($task->completed) : ?>
            <strike><?= $task->description; ?></strike>
        <?php else : ?>
            <?= $task->description; ?>
        <?php endif; ?>
    </li>
<?php endforeach; ?>
