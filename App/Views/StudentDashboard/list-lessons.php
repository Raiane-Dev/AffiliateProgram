<section class="content">

        <div class="columns-two-bedroom">
            <div class="container">
                <div class="head-container">
                    <div><h2>Market</h2></div>
                    <div><a href="" class="link">Show More</a></div>
                </div>
                <table class="columns-four">
                    <thead>
                        <tr>
                            <td>Name Lesson</td>
                            <td></td>
                            <td>Progress</td>
                            <td>Course</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($list as $key => $item){
                                $numbers = $lessons->countViews($item['id']);
                        ?>
                        <tr>
                            <td class="columns-two">
                                <div>
                                    <img src="<?= URL ?>Storage/Assets/capa.jpg" />
                                </div>
                                <div>
                                    <a href="<?= URL_STUDENT ?>/course/<?= "{$item['id']}/1"; ?>">
                                    <h5><?= $item['name']; ?></h5>
                                    <span> <?= count($classes::selectClasses($item['id'])); ?> lessons</span>
                                    </a>
                                </div>
                            </td>
                            <td></td>
                            <td><button class="<?= $numbers < 50 ? "low" : "plus"?>"><?= $numbers; ?>%</button></td>
                            <td>ID <?= $item['id_course']; ?> </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
        </div>
        

        <div class="columns-three flex">
            <div class="container notice">
                <div class="head-container">
                    <h2>Create new</h2>
                </div>
                <div>
                    <p>Lorem ipsum</p>
                </div>
                <div>
                    <img src="" />
                </div>
            </div>

            <div class="container notice">
                <div class="head-container">
                    <h2>Create new</h2>
                </div>
                <div>
                    <p>Lorem ipsum</p>
                </div>
                <div class="infinite">
                    <div class="mini-box">
                        <span class="bool">R</span>
                        <h6>Litecoin</h6>
                        <p>LTC / BTC</p>
                        
                        <div class="divider"></div>
                        <h6>
                    </div>
                    <div class="mini-box">
                        <span class="bool">R</span>
                        <h6>Litecoin</h6>
                        <p>LTC / BTC</p>
                        
                        <div class="divider"></div>
                        <h6>Views</h6>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>