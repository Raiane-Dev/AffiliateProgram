<div class="columns-three">
    <div class="box">
        <div>
            <span class="background-icon square"><i data-feather="corner-up-right"></i></span>
            <h4>1200</h4>
            <span>Lorem ipsum</span>
        </div>
        <div>

        </div>
    </div>
    <div class="box">
        <div>
            <span class="background-icon square"><i data-feather="maximize-2"></i></span>
            <h4>1200</h4>
            <span>Lorem ipsum</span>
        </div>
    </div>
    <div class="box">
        <div>
            <span class="background-icon square"><i data-feather="repeat"></i></span>
            <h4>1200</h4>
            <span>Lorem ipsum</span>
        </div>
    </div>
</div>

<div class="container">
    <h2>Market down</h2>
    <span>Lorem ipsum</span>
    <div id="chart"></div>
</div>

<?php if($_SESSION['function'] === 'admin'){ ?>
<div class="container">
    <table>
        <thead>
            <tr>
                <td><h6>Code</h6></td>
                <td></td>
                <td>Name</td>
                <td>Details</td>
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
<?php } ?>