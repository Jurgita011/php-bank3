<h1>Ištrinti sąskaitą</h1>
<form action="/account/destroy/<?= $account['id'] ?>" method="post">
    <div>
        <p>Ar tikrai norite ištrinti sąskaitą?</p>
        <div>
            <h2><?= $account['firstName'] ?> <?= $account['lastName'] ?></h2>
        </div>
        <h3><?= $account['accountNo'] ?></h3>
    </div>
    <div>
        <button type="submit">Ištrinti</button>
        <button>
            <a href="/account">Atšaukti</a>
        </button>
    </div>

</form>
