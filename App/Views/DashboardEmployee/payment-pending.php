<div class="container">
    <table>
        <thead>
            <tr>
                <td><h6>Token</h6></td>
                <td>Amount</td>
                <td>Name User</td>
                <td>Function user</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($payment_pending as $key => $payment){
                          $user = Src\Repository\Users\Users::selectSingle($payment['id_user']);
                          $total += $payment['amount'];
            ?>
            <tr>
                <td><?= substr($payment['code'],0,10) ?>...</td>
                <td><?= $payment['amount'] ?></td>
                <td><?= $user['name']; ?></td>
                <td><?= $user['function']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<div class="container">
    <h2>SubTotal: <?= $total; ?></h2>
</div>