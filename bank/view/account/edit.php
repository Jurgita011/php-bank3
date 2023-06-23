<h1>Edit account</h1>
<form action="/account/update/<?= $account['id'] ?>" method="post">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?= $account['name'] ?>" required>
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" required><?= $account['description'] ?></textarea>
    </div>
    <div>
        <button type="submit">Update</button>
    </div>
</form>