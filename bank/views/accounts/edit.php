<div class="w3-container w3-margin">

    <h1 class="w3-card w3-amber w3-padding">Redaguoti balansą</h1>

    <p class="w3-margin">Pridėkite arba išimkite lėšų iš sąskaitos:</p>

    <form class="w3-card w3-container" style="width:50%;" action="/accounts/update/<?= $id ?>" method="post">
        <div class="w3-container" style="display: flex; flex-direction: column;">
            <h3><?= $first_name ?> <?= $last_name ?></h3>
        </div>
        <div class="w3-container" style="display: flex; flex-direction: column;">
            <p>Sąskaitos numeris</p>
            <p class="w3-input"><?= $iban ?></p>
        </div>
        <div class="w3-container" style="display: flex; flex-direction: column;">
            <p>Balansas</p>
            <p class="w3-input"><?= $balance ?> €</p>
        </div>

        <div class="w3-padding" style="display: flex; flex-direction: column;">
            <label for="amount">Redaguoti balansą:</label>
            <input class="w3-input w3-border" type="number" name="amount" id="amount" placeholder="Įveskite sumą" required>
        </div>

        <div class="w3-padding">
            <button class="w3-btn w3-amber" type="submit" name="add" value=1>Pridėti</button>
            <button class="w3-btn w3-grey" type="submit" name="withdraw" value=1>Išimti</button>
        </div>
    </form>

    <div class="w3-margin">
        <button class="w3-btn w3-light-grey">
            <a href="/accounts">Grįžti į sąskaitų sąrašą</a>
        </button>
    </div>

</div>