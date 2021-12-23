<div class="container">
    <table>
        <thead>
            <tr>
                <td><h6>Token</h6></td>
                <td></td>
                <td>Name User</td>
                <td>Function user</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($pays as $key => $pay){ ?>
            <tr>
                <td><?= $pay['code']; ?></td>
                <td></td>
                <td><?= $pay['name']; ?></td>
                <td><a href="<?= URL_AFFILIATE ?>/bank-account?user=<?= $pay['id_user'] ?>" class="button">Details Bank</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>