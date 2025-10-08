<?php include('header.php'); ?>
<div class="page-header breadcum">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="caption">
                    <h1 class="fz-40">Applications</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .applicationTitle {
        font-size: 20px;
        text-align: center;
        text-transform: capitalize;
        background-color: #035ba2;
        padding: 8px 10px;
        color: #fff;
        margin-bottom: 20px;
    }
</style>


<section class="section-padding bg-white">
    <div class="container">
        <div class="row">
            <?php
            $data = glob("assets/imgs/innerpage/application/*.*");
            ?>
                <?php
                foreach ($data as $c) {
                    // $applicationName = end(explode("/", $c));
                    $applicationName = pathinfo($c, PATHINFO_FILENAME);
                ?>
                    <div class="col-md-4 col-12 mt-5">
                     
                            <img class="w-100" src="<?php echo $c; ?>" />
                            <h3 class="applicationTitle"><?php echo $applicationName; ?></h3>
                       
                    </div>
                <?php
                }
                ?>
    </div>
</section>


<?php include('footer.php'); ?>