<h1>accounts list</h1>
<?php if (empty($accounts)) : ?>
    <p>No accounts found.</p>
<?php else: ?>
<?php foreach ($accounts as $account) : ?>
    <h2><?= $account['name'] ?></h2>
    <p><?= $account['description'] ?></p>
    <a href="/account/edit/<?= $account['id'] ?>">Edit</a>
    <a href="/account/delete/<?= $account['id'] ?>">Delete</a>
<?php endforeach ?>
<?php endif ?>