<section class="content course">
    <div class="box colorful">
        <form method="post">
            <input type="text" name="holder_name" value="<?= $info['holder_name']; ?>" placeholder="Holder Name" />

            <input type="text" name="bank" value="<?= $info['bank']; ?>" placeholder="Bank" />

            <input type="text" name="branch_number" value="<?= $info['branch_number']; ?>" placeholder="Branch Number" />

            <input type="text" name="branch_check_digit" value="<?= $info['branch_check_digit']; ?>" placeholder="Branch Check Digit" />
            
            <input type="text" name="account_number" value="<?= $info['account_number']; ?>" placeholder="Account Number" />
            
            <input type="text" name="account_check_digit" value="<?= $info['account_check_digit']; ?>" placeholder="Account Check Digit" />

            <input type="text" name="holder_type" value="<?= $info['holder_type']; ?>" placeholder="Holder Type" />

            <input type="text" name="holder_document" value="<?= $info['holder_document']; ?>" placeholder="Holder Document" />

            <input type="text" name="type" value="<?= $info['type']; ?>" placeholder="Type" />

            <input type="submit" value="Confirm" name="action" />
        </form>
    </div>
</section>