<section class="content">
    <div class="question">
        <i data-feather="help-circle"></i>
        <h4><?= $quiz['name']; ?></h4>
    </div>
    <div class="quiz">
        <form method="post">
        <?php
            foreach($questions as $key => $question){
                if ($rows === 1 && isset($question['result'])){
                    $result = $question['result'];
                    $check = "checked";
                } elseif ($rows === 1) {
                    $result = "error";
                    $check = "disabled";
                } else {
                    $result = "";
                    $check = "";
                }
        ?>
        <div class="quiz-single <?= $result; ?>">
            <div class="input-check">
                <input type="radio" name="response" id="<?= $key + 1 ?>" value="<?= $key + 1 ?>" <?= $check ?> />
                <label for="<?= $key + 1 ?>">
                    <i data-feather="check-square"></i>
                </label>
            </div>
            <div class="label">
                <p><?= substr($question['question'], 0, 300); ?></p>
            </div>
        </div>
        <?php } ?>

            <input type="hidden" value="<?= $quiz['spots'] ?>" name="spots" />
            <input type="hidden" value="<?= $quiz['id'] ?>" name="id_quiz" />
            <input type="submit" value="Send" name="action" />
        </form>
    </div>
</section>