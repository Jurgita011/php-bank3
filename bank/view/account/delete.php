<h1>Confirm account delete</h1>
<form action="/account/destroy/<?= $account['id'] ?>" method="post">
    <div>
        <p>Are you sure you want to delete this account?</p>
        <h2><?= $account['name'] ?></h2>
    </div>
    <div>
        <button type="submit">Delete</button>
    </div>
    <div>
        <a href="/account">Cancel</a>
    </div>
</form>
