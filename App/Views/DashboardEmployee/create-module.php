<section class="content course">
    <div class="box colorful">
        <h2>Create Module</h2>
        <form method="post">
            <input type="text" placeholder="Name" name="name" />
            <select name="id_course">
                <?php foreach($courses as $key => $course){ ?>
                <option value="<?= $course['id']; ?>"><?= $course['name']; ?></option>
                <?php } ?>
            </select>
            <input type="submit" value="Register" name="action">
            
        </form>
    </div>
</section>