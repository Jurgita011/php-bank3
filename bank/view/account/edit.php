<h1>Redaguoti balansą</h1>

<div>
    <p>Pridėkite arba išimkite lėšų iš sąskaitos</p>
    <div>
        <h2><?= $account['firstName'] ?> <?= $account['lastName'] ?></h2>
    </div>
    <h3><?= $account['accountNo'] ?></h3>
    <h3><?= $account['balance'] ?> €</h3>
</div>

<form action="/account/update/<?= $account['id'] ?>" method="post">
    <div>
        <label for="amount">Įveskite sumą</label>
        <input type="number" name="amount" placeholder="..." required>
        <span>€</span>
    </div>
    <div>
        <button type="submit">Pridėti</button>
        <button type="submit">Išimti</button>
    </div>


    <div>
        <button>
            <a href="/account">Atšaukti</a>
        </button>
    </div>

</form>