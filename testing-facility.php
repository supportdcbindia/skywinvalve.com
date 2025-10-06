<?php include('header.php'); ?>
<div class="page-header breadcum">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="caption">
                    <h1 class="fz-40">Testing Facility</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section-padding bg-white">
    <div class="container">
        <div class="row">
            <?php
            $data = glob("assets/imgs/innerpage/testing-facility/*.*");
            ?>
            <div class="row g-4 mt-0">
                <?php
                foreach ($data as $c) {
                ?>
                    <div class="col-md-4 col-6 mt-5">
                        <a href="<?php echo $c; ?>" class="fancybox popup-image gallery-item" >
                            <img class="w-100" src="<?php echo $c; ?>" />
                        </a>
                    </div>
                <?php
                }
                ?>
        </div>
    </div>
</section>


<?php include('footer.php'); ?>