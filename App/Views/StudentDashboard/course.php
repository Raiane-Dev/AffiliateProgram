<section class="content">
    <h1><?= $course['name']; ?></h1>
    <div class="video">
        <video controls="controls" autoplay="autoplay">
            <source src="<?= URL ?>Storage/Video/<?= $course['video']; ?>" type="video/mp4">
        </video>
    </div>
    <div>
        <form method="post">
            <input style="float:right;" type="submit" value="Viewed" name="view" />
        </form>
    </div>


    <div class="classes">
        <ul>
            <?php
                foreach($selectModuleLessons as $key => $ModuleLesson){
            ?>
                <li class="columns-two space">
                    <div><a href="<?= URL_STUDENT."/course/".$ModuleLesson['id_module']."/".$ModuleLesson['id']; ?>">
                        <h6 style="color: <?= $ModuleLesson['color']; ?>"><i style="fill: <?= $ModuleLesson['color']; ?>" data-feather="<?= $ModuleLesson['view'] ?>"></i> <?= $ModuleLesson['name']; ?></h6>
                    </div>
                    <div>
                        <h6><?= $ModuleLesson['duration']; ?></h6>
                    </a></div>
                </li>
            <?php } ?>
        </ul>
    </div>
</section>