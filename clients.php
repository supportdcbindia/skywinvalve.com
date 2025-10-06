<?php include('header.php'); ?>
<div class="page-header breadcum">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="caption">
                    <h1 class="fz-40">Clients</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section-padding bg-white clients-sec">
    <div class="container">
        <div class="row">
            <?php
            $data = glob("assets/imgs/innerpage/clients/*.*");
            ?>
            <div class="row">
                <?php
                foreach ($data as $c) {
                ?>
                    <div class="col-md-2 col-6 mt-5">
                       
                            <img class="w-100" src="<?php echo $c; ?>" />
                      
                    </div>
                <?php
                }
                ?>
        </div>
    </div>
</section>


<?php include('footer.php'); ?>