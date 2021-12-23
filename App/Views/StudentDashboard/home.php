<section class="content">
    <div class="banner">
        <div class="box-container">
            <div>
                <h2>Lorem ipsum <br />dolor amet at lorem</h2>
                <p>Join the int</p>
                <div class="inline">
                    <input type="email" placeholder="Email Address" class="dark"/>
                    <input type="submit" value="Register now" />
                </div>
            </div>
            <div class="infinite">
                <div class="mini-box">
                    <h4>Maker Fee Rebates</h4>
                    <span>Upgrade</span>
                </div>
                <div class="mini-box">
                    <h4>Maker Fee Rebates</h4>
                    <span>Upgrade</span>
                </div>
            </div>
        </div>
    </div>

        <div class="columns-two-bedroom">
            <div class="container">
                <div class="head-container">
                    <div><h2>Market</h2></div>
                    <div><a href="" class="link">Show More</a></div>
                </div>
                <table class="columns-four">
                    <thead>
                        <tr>
                            <td>Quiz</td>
                            <td></td>
                            <td>Points</td>
                            <td>Response</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($list as $key => $item){ ?>
                        <tr>
                            <td class="columns-two">
                                <div>
                                    <img src="<?= URL ?>Storage/Assets/question.png" />
                                </div>
                                <div>
                                    <h5><?= substr($item['name'], 0, 30); ?></h5>
                                    <span>Your answer <?= $item['response']; ?></span>
                                </div>
                            </td>
                            <td></td>
                            <td><button class="<?= $item['spots'] < 10 ? "low" : "plus"?>"><?= $item['spots']; ?></button></td>
                            <td>Reply <?= $item['response_two']; ?></td>
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