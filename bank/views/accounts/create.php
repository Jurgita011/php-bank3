<div class="w3-container w3-margin">

    <h1 class="w3-card w3-amber w3-padding">Pridėti naują sąskaitą</h1>

    <p class="w3-margin">Įveskite reikalingus duomenis, kad galėtumėte pridėti naują sąskaitą:</p>

    <form class="w3-card w3-padding" style="width:50%;" action="/accounts/store" method="post">
        <div class="w3-padding" style="display: flex; flex-direction: column;">
            <label for="first_name">Vardas</label>
            <input input class="w3-input w3-border" type="text" name="first_name" id="first_name" value="<?= $first_name ?>" placeholder="Įveskite vardą" required>
        </div>
        <div class="w3-padding" style="display: flex; flex-direction: column;">
            <label for="last_name">Pavardė</label>
            <input input class="w3-input w3-border" type="text" name="last_name" id="last_name" value="<?= $last_name ?>" placeholder="Įveskite pavardę" required>
        </div>
        <div class="w3-padding" style="display: flex; flex-direction: column;">
            <label for="personal_id">Asmens kodas</label>
            <input input class="w3-input w3-border" type="text" name="personal_id" id="personal_id" value="<?= $personal_id ?>" placeholder="Įveskite asmens kodą" required>
        </div>
        <div class="w3-padding" style="display: flex; flex-direction: column;">
            <label for="iban">Banko sąskaitos numeris</label>
            <input input class="w3-input w3-border" type="text" name="iban" id="iban" value="<?= $iban ?>" readonly>
        </div>
        <div class="w3-padding" style="display: flex; flex-direction: column;">
            <label for="balance">Balansas</label>
            <input input class="w3-input w3-border" type="number" name="balance" id="balance" value=0 placeholder="0 €" readonly>
        </div>
        <div class="w3-padding">
            <button class="w3-btn w3-amber" type="submit">Išsaugoti</button>
            <button class="w3-btn w3-grey">
                <a href="/accounts">Atšaukti</a>
            </button>
        </div>
    </form>

</div>









