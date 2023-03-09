<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('inc_metacss'); ?>
    <style>
    .error_row {

        width: 100%;
        margin: 0 0 1px 0;
    }

    .info-msg,
    .success-msg,
    .warning-msg,
    .error-msg {

        padding: 10px;
        border-radius: 3px 3px 3px 3px;

        font-size: 12px;
        font-weight: 400;
    }

    .info-msg {
        color: #059;
        background-color: #BEF;
    }

    .success-msg {
        color: #270;
        background-color: #DFF2BF;
    }

    .warning-msg {
        color: #9F6000;
        background-color: #FEEFB3;
    }

    .error-msg {
        color: #D8000C;
        background-color: #FFBABA;
    }

    .captcha_row {
        display: inline-block;
        width: 100%;
        margin: 15px 0 0 0;
    }

    .captcha_row span {
        display: inline-block;
        margin: 25px 10px 0 0;
        color: #333;
        font-size: 16px;
    }

    .hidedefault {
        display: none;
    }
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
                            <h3>faq</h3>
                            <ul>
                                <li><a href="index.html">home</a></li>
                                <li>></li>
                                <li>FAQ</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs area end-->
        <div class="accordion_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="accordion" class="card__accordion">
                        <?php 
			  $i=1;
			  foreach($faq_rs as $det){
?>
                            <div class="card card_dipult">
                                <div class="card-header card_accor" id="heading<?php echo $i?>">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?php echo $i?>" aria-expanded="false" aria-controls="collapse<?php echo $i?>">
                                        <?php
						         echo $this->common->getDbValue($det['question']);
 				            ?> 	

                                        <i class="fa fa-plus"></i>
                                        <i class="fa fa-minus"></i>

                                    </button>

                                </div>

                                <div id="collapse<?php echo $i?>" class="collapse" aria-labelledby="heading<?php echo $i?>"
                                    data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <p> <?php
						 echo $this->common->getDbValue($det['answer']);
 				            ?>   </p>
                                    </div>
                                </div>
                            </div>
                            <?php 
$i++;
} ?>   
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php $this->load->view('inc_footer'); ?>

        <!-- JS ============================================ -->
        <?php $this->load->view('inc_common_footer_js'); ?>