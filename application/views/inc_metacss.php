<?php
$session_user_data = $this->session->userdata('user_data');
$trandomuuid = $this->common->randomuuid();

$wti_meta_tags_rs =  json_decode( file_get_contents('uploads/jsondata/wti_meta_tags.json'),true);
$wti_meta_tags = $wti_meta_tags_rs[0];
 //print_r($wti_meta_tags);

?>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>
    <?php echo (!empty($wti_meta_tags['meta_title'])) ? $wti_meta_tags['meta_title'] : 'Bond-Beyond-House of Silver, Pearls and 24K Gold'?>
</title>
<meta name="description"
    content="<?php echo (!empty($wti_meta_tags['meta_descriptions'])) ? $wti_meta_tags['meta_descriptions'] : 'Bond-Beyond-House of Silver, Pearls and 24K Gold'?>">
<meta name="keywords"
    content="<?php echo (!empty($wti_meta_tags['meta_keywords'])) ? $wti_meta_tags['meta_keywords'] : 'Bond-Beyond-House of Silver, Pearls and 24K Gold'?>" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/img/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/img/favicon-16x16.png">
<!-- CSS 
    ========================= -->

<!-- Plugins CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/plugins.css">

<!-- Main Style CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/stylesheet.css">
<!--modernizr min js here-->
<script src="<?php echo base_url();?>assets/js/vendor/modernizr-3.7.1.min.js"></script>

<!-- /theme JS files -->


<script>
const SITE_URL = "<?php echo base_url()?>";
</script>
<style>
.hidedefault {
    display: none;
}

.pagination ul li a:hover {
    background: #05555c !important;
    color: #ffffff !important;
}

div.product_thumb img {
    border-radius: 5px;
}
</style>