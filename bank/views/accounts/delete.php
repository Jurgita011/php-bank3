<div class="w3-container w3-margin">

    <h1 class="w3-card w3-amber w3-padding">Ištrinti sąskaitą</h1>

    <p class="w3-margin">Ar tikrai norite ištrinti sąskaitą?</p>

    <form class="w3-card w3-container" style="width:50%;" action="/accounts/destroy/<?= $id ?>" method="post">

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

        <div class="w3-padding">
            <button class="w3-btn w3-amber" type="submit">Ištrinti</button>
            <button class="w3-btn w3-grey">
                <a href="/accounts">Atšaukti</a>
            </button>
        </div>
    </form>

</div>