<div class="w3-container w3-margin">

    <h1 class="w3-card w3-amber w3-padding">Sąskaitų sąrašas</h1>

    <table class="w3-table w3-bordered">
        <?php if (empty($accounts)) : ?>
            <p class="w3-margin">Sąskaitų sąrašas tuščias.</p>

        <?php else : ?>
            <tr>
                <th>Vardas</th>
                <th>Pavardė</th>
                <th>Asmens kodas</th>
                <th>Sąskaitos Nr.</th>
                <th>Balansas</th>
            </tr>
            <?php foreach ($accounts as $account) : ?>
                <tr>
                    <td style="line-height: 35px;"><?= $account['first_name'] ?></td>
                    <td style="line-height: 35px;"><?= $account['last_name'] ?></td>
                    <td style="line-height: 35px;"><?= $account['personal_id'] ?></td>
                    <td style="line-height: 35px;"><?= $account['iban'] ?></td>
                    <td style="line-height: 35px;"><?= $account['balance'] ?><span> €</span></td>
                    <td>
                        <button class="w3-btn w3-amber">
                            <a href="/accounts/edit/<?= $account['id'] ?>">Redaguoti balansą</a>
                        </button>
                    </td>
                    <td>
                        <button class="w3-btn w3-grey">
                            <a href="/accounts/delete/<?= $account['id'] ?>">Ištrinti sąskaitą</a>
                        </button>
                    </td>
                </tr>




            <?php endforeach ?>
    </table>
<?php endif ?>


</div>