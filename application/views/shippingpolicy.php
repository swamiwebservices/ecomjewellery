<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('inc_metacss'); ?>
    <style>


    </style>
</head>

<body>
    <div class="home_black_version">

        <?php $this->load->view('inc_header_menu'); ?>


        <!--breadcrumbs area start-->
        <div class="breadcrumbs_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_content">
                            <h3>SHIPPING & DELIVERY</h3>
                            <ul>
                                <li><a href="<?php echo site_url('home')?>">Home</a></li>
                                <li>&gt;</li>

                                <li>SHIPPING & DELIVERY</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs area end-->
        <div class="unlimited_services mb-3">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-12 col-md-12">
                    <?php
                        print_r($records);

                        ?>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!--about section area -->

        <!--about section end-->



        <?php $this->load->view('inc_footer'); ?>

        <!-- JS ============================================ -->
        <?php $this->load->view('inc_common_footer_js'); ?>


</body>

</html>