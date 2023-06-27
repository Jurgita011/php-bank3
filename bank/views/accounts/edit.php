<h1>Redaguoti sąskaitą</h1>

<p>Redaguokite sąskaitos duomenis. Pridėkite arba išimkite lėšų iš sąskaitos:</p>

<form action="/accounts/update/<?= $accounts['id'] ?>" method="post">

    <div>
        <label for="firstName">Vardas</label>
        <input type="text" name="firstName" id="firstName" value="<?= $accounts['firstName'] ?>" required>
    </div>
    <div>
        <label for="lastName">Pavardė</label>
        <input type="text" name="lastName" id="lastName" value="<?= $accounts['lastName'] ?>" required>
    </div>
    <div>
        <label for="personalId">Asmens kodas</label>
        <input type="text" name="personalId" id="personalId" value="<?= $accounts['personalId'] ?>" required>
    </div>
    <div>
        <label for="accountNo">Banko sąskaitos numeris</label>
        <input type="text" name="accountNo" id="accountNo" value="<?= $accounts['accountNo'] ?>" required>
    </div>
    <div>
        <label for="balance">Balansas</label>
        <input type="number" name="balance" id="balance" min="0" step="0.01" value="<?= $accounts['balance'] ?>" required>
    </div>

    <div>
        <button type="submit">Pridėti</button>
        <button type="submit">Išimti</button>
    </div>
</form>

<div>
    <button>
        <a href="/accounts">Atšaukti</a>
    </button>
</div>