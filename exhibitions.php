<?php include('header.php'); ?>
<div class="page-header breadcum">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="caption">
                    <h1 class="fz-40">Exhibitions</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section-padding bg-white">
    <div class="container-fluid px-5 mb-50">
        <div class="row">
            <div class="col-md-12 col-12 mt-5 pb-5 text-center" style="padding-bottom: 30px !important;">
                <a href="assets/imgs/exhibitions/boilar-india.png" class="fancybox">
                    <img class="w-100" src="assets/imgs/exhibitions/boilar-india.png" />
                </a>
            </div>
            <?php
            $data = glob("assets/imgs/innerpage/exhibition/boiler-india/*.*");
            ?>
                <?php
                foreach ($data as $c) {
                ?>
                <div class=" col-xl-3 col-md-4 col-6 mt-5">
                    <a href="<?php echo $c; ?>" class="fancybox gallery-item">
                        <img class="w-100" src="<?php echo $c; ?>" />
                    </a>
                </div>
                <?php
                }
                ?>
        </div>
    </div>



        <div class="container-fluid px-5">
            <div class="row">
                <div class="col-md-12 col-12 mt-5 pb-5 text-center" style="padding-bottom: 30px !important;">
                <a href="assets/imgs/innerpage/exhibition/oil-gas-power-2025.webp" class="fancybox">
                    <img class="w-100" src="assets/imgs/innerpage/exhibition/oil-gas-power-2025.webp">
                </a>
            </div>
            </div>
            <div class="row">

                <?php
            $data = glob("assets/imgs/innerpage/exhibition/oil-gas-power-2025/*.*");
            ?>
                    <?php
                foreach ($data as $c) {
                ?>
                    <div class=" col-xl-3 col-md-4 col-6 mt-5">
                        <a href="<?php echo $c; ?>" class="fancybox gallery-item">
                            <img class="w-100" src="<?php echo $c; ?>" />
                        </a>
                    </div>
                    <?php
                }
                ?>
            </div>
</section>


<?php include('footer.php'); ?>