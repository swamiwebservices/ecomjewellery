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
                            <h3>Terms And Conditions</h3>
                            <ul>
                                <li><a href="<?php echo site_url('home')?>">Home</a></li>
                                <li>&gt;</li>

                                <li>Terms And Conditions</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs area end-->
        <div class="unlimited_services">
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
        <!--about section area -->

        <!--about section end-->

        <!--chose us area start-->
        <div class="choseus_area mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="chose_title">
                            <h1>Why chose us?</h1>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_chose">
                            <div class="chose_icone">
                                <img src="assets/img/about/About_icon1.jpg" alt="">
                            </div>
                            <div class="chose_content">
                                <h3>Creative Design</h3>
                                <!-- <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit amet enim</p> -->

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_chose">
                            <div class="chose_icone">
                                <img src="assets/img/about/About_icon2.jpg" alt="">
                            </div>
                            <div class="chose_content">
                                <h3>100% Money Back Guarantee</h3>
                                <!-- <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit amet enim</p> -->

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_chose">
                            <div class="chose_icone">
                                <img src="assets/img/about/About_icon3.jpg" alt="">
                            </div>
                            <div class="chose_content">
                                <h3>Online Support 24/7</h3>
                                <!-- <p>Erat metus sodales eget dolor consectetuer, porta ut purus at et alias, nulla ornare velit amet enim</p> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--chose us area end-->


        <?php $this->load->view('inc_footer'); ?>

        <!-- JS ============================================ -->
        <?php $this->load->view('inc_common_footer_js'); ?>


</body>

</html>