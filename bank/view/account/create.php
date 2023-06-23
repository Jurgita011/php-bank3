<h1>Pridėti naują sąskaitą</h1>
<form action="/account/store" method="post">
    <div>
        <label for="firstName">Vardas</label>
        <input type="text" name="firstName" required>
    </div>
    <div>
        <label for="lastName">Pavardė</label>
        <input type="text" name="lastName" required>
    </div>
    <div>
        <label for="personalId">Asmens kodas</label>
        <input type="text" name="personalId" required>
    </div>
    <div>
        <label for="accountNo">Banko sąskaitos numeris</label>
        <input type="text" name="accountNo" required>
    </div>
    <div>
        <label for="accountNo">Balansas</label>
        <input type="text" name="balance" placeholder="0 €" readonly>
    </div>
    <div>
        <button type="submit">Išsaugoti</button>
        <button>
            <a href="/account">Atšaukti</a>
        </button>
    </div>
</form>










