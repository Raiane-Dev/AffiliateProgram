</main>
<aside>
    <div class="user-box">
        <img src="<?= URL ?>Storage/Assets/<?= $_SESSION['image']; ?>" />
        <h6><?= $_SESSION['name']; ?></h6>
        <span><?= $_SESSION['email']; ?></span>
    </div>

    <div class="stastics">
        <h2>My Referrals</h2>
        <a href="" class="link">Show more</a>
            
        <div id="chart-line"></div>

        <div class="columns-two">
            <div>
                <span>Lessons</span>
                <h6>12</h6>
            </div>
            <div>
                <span>Quizes</span>
                <h6>32</h6>
            </div>
        </div>
    </div>

    <div class="list">
        <ul>
            <li class="columns-two">
                <div>
                    <img src="<?= URL ?>Storage/Assets/User.png" />
                </div>
                <div>
                    <span>Lorem ipsum</span>
                    <h6>General</h6>
                </div>
            </li>

            <li class="columns-two">
                <div>
                    <img src="<?= URL ?>Storage/Assets/User.png" />
                </div>
                <div>
                    <span>Lorem ipsum</span>
                    <h6>General</h6>
                </div>
            </li>
        </ul>
    </div>

    <div class="info-box">
        <h6>Receive up 40% discount</h6>
        <span>Invite te invitation</span>
    </div>
</aside>
</section>
<script>
    feather.replace()
</script>
<script src="<?= URL ?>js/metrics.js"></script>
</body>
</html>