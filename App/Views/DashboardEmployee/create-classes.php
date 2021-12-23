<section class="content course">
    <div class="box colorful">
        <h2>Create Classes</h2>
        <form method="post" enctype= multipart/form-data>
            <input type="text" placeholder="Name" name="name" />
            <input type="number" placeholder="Duration" name="duration" />
            <select name="id_module">
                <option value="0">Select Module</option>
                <?php foreach($modules as $key => $module){ ?>
                    <option value="<?= $module['id']; ?>"><?= $module['name']; ?></option>
                <?php } ?>
            </select>
            <select name="order_by">
                <option value="0">Select Order</option>
                <?php foreach($classes as $key => $classe){ ?>
                    <option value="<?= $classe['order_by']; ?>"><?= $classe['name']; ?></option>
                <?php } ?>
            </select>
            <input type="file" name="video" accept="video/*" />
            <input type="submit" value="Register" name="action">
        </form>
    </div>
</section>