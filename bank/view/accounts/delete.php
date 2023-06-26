<<h1>Ištrinti sąskaitą</h1>

<p>Ar tikrai norite ištrinti sąskaitą?</p>

<form action="/accounts/destroy/<?= $accounts['id'] ?>" method="post">

    <div>
        <div>
            <h2><?= $accounts['firstName'] ?> <?= $accounts['lastName'] ?></h2>
        </div>
        <h3><?= $accounts['accountNo'] ?></h3>
    </div>

    <div>
        <button type="submit">Ištrinti</button>
        <button>
            <a href="/accounts">Atšaukti</a>
        </button>
    </div>
</form>