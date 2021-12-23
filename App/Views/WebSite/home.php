<main class="home">
    <div class="ini">
        <div class="text">
            <h2><?= $course['name']; ?></h2>
            <p><?= $course['description']; ?></p>
            <button>Lorem ipsum</button>
        </div>
        <div class="banner">
            <img src="<?= URL ?>Storage/Assets/Bannertwo.png" />
        </div>
    </div>

    <div class="tops">
        <h2>Top Crypto Now</h2>

        <div class="list-vertical">
            <div class="single">
                <div class="inline"><span><i data-feather="git-branch"></i></span> <h6>Git Branch</h6></div>
                <h4>2000</h4>
                <p class="note">(128)</p>
                <div id="chart-line"></div>
            </div>

            <div class="single">
                <div class="inline"><span><i data-feather="git-commit"></i></span> <h6>Git Commit</h6></div>
                <h4>2930</h4>
                <p class="note">(109)</p>
                <div id="chart-line"></div>
            </div>

            <div class="single">
                <div class="inline"><span><i data-feather="git-merge"></i></span> <h6>Git Merge</h6></div>
                <h4>2942</h4>
                <p class="note">(091)</p>
                <div id="chart-line"></div>
            </div>

            <div class="single">
                <div class="inline"><span><i data-feather="git-pull-request"></i></span> <h6>Git Pull Request</h6></div>
                <h4>2145</h4>
                <p class="note">(876)</p>
                <div id="chart-line"></div>
            </div>

            <div class="single">
                <div class="inline"><span><i data-feather="github"></i></span> <h6>Github</h6></div>
                <h4>2350</h4>
                <p class="note">(687)</p>
                <div id="chart-line"></div>
            </div>

            <div class="single">
                <div class="inline"><span><i data-feather="gitlab"></i></span> <h6>Gitlab</h6></div>
                <h4>1230</h4>
                <p class="note">(345)</p>
                <div id="chart-line"></div>
            </div>
        </div>
    </div>

    <div class="info">
        <div class="text">
            <h2>Lorem ipsum dolor amet et lamore</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <button>Lorem ipsum</button>
        </div>
        <div class="banner">
            <img src="<?= URL ?>Storage/Assets/banner.png" />
        </div>
    </div>

    <div class="plus">
        <div class="grid-two">
            <div class="grid-single">
                <span><i data-feather="home"></i></span>
                <h4>Valu Performance</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>

            <div class="grid-single">
                <span><i data-feather="home"></i></span>
                <h4>Valu Performance</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>

            <div class="grid-single">
                <span><i data-feather="home"></i></span>
                <h4>Valu Performance</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>

            <div class="grid-single">
                <span><i data-feather="home"></i></span>
                <h4>Valu Performance</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>
        </div>

        <div class="text">
            <h2>Lorem ipsum dolor amet et lamore</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <button>Lorem ipsum</button>
        </div>
    </div>

    <div class="form">
        <div>
            <h2>Lorem ipsum dolor amet et lamore</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <button>Lorem ipsum</button>
        </div>
        <div>
            <form method="post" enctype="multipart/form-data">
                <label>Name</label>
                <input type="text" name="name" placeholder="Your name" />

                <label>Email</label>
                <input type="text" name="email" placeholder="example@example.com" />

                <label>Password</label>
                <input type="password" name="password" placeholder="********" />

                <input type="file" name="image" />

                <select name="function">
                    <option value="student" default>Select Function</option>
                    <option value="student">Student</option>
                    <option value="affiliate">Affiliate</option>
                </select>

                <input type="submit" value="Access" name="action" />
            </form>
        </div>
    </div>
</main>