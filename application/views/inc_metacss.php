<?php
$session_user_data = $this->session->userdata('user_data');
$trandomuuid = $this->common->randomuuid();
?>
 <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Monsta</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/img/favicon.ico">
    
    <!-- CSS 
    ========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

    <!--modernizr min js here-->
    <script src="<?php echo base_url();?>assets/js/vendor/modernizr-3.7.1.min.js"></script>
    
<!-- /theme JS files -->


<script  >
var st_url = "<?php echo site_url() ?>/";
</script>
<style  >
.hidedefault {
    display: none;
}
.topemenuwti {
   /*  background-image:
        url("<?php echo base_url() ?>websiteadmin/global_assets/images/header1.jpg");
    background-repeat: no-repeat;
   color: #ffffff!important; */
}

.header_two .header_middel {
    padding: 20px 0px 10px 0px!important;
    /* background-color: #2e7254;
    color: #ffffff!important; */
}
</style>