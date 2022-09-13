<!DOCTYPE html>
<html lang="en">

    <head>
        <?php $this->load->view('inc_metacss');?>
        <script src="<?php echo base_url()?>global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
        <script src="<?php echo base_url()?>global_assets/js/plugins/forms/selects/select2.min.js"></script>
        <script src="<?php echo base_url()?>global_assets/js/demo_pages/datatables_responsive.js"></script>
        <script src="<?php echo base_url()?>global_assets/js/plugins/notifications/bootbox.min.js"></script>
        <style>
        #mapCanvas {
            width: 100%;
            height: 800px;
			text-align:center;
        }

        .trclick {
            cursor: pointer;
        }
        </style>
    </head>

    <body>
        <!-- Main navbar -->
        <?php $this->load->view('inc_topmenu');?>
        <!-- /main navbar -->
        <!-- Page content -->
        <div class="page-content">
            <!-- Main sidebar -->
            <?php $this->load->view('inc_leftmenu');?>
            <!-- /main sidebar -->
            <!-- Main content -->
            <div class="content-wrapper">
                <!-- Page header -->
                <div class="page-header page-header-light">
                    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                        <div class="d-flex">
                            <div class="breadcrumb">
                                <a href="<?php echo site_url("home");?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                                <span class="breadcrumb-item "><?php echo (isset($this->pg_title))?$this->pg_title:''?></span>
                                <span class="breadcrumb-item active"><?php echo (isset($sub_heading))?$sub_heading:''?></span>
                            </div>

                            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                        </div>

                        <div class="header-elements d-none">
                            <div class="breadcrumb justify-content-center">
<!--                                <a href="<?php echo site_url($this->ctrl_name."/add_type");?>" class="breadcrumb-elements-item">
                                    <button type="button" class="btn btn-success btn-sm"><i class="icon-plus2 mr-2"></i> Add New</button>
                                </a>
-->
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /page header -->
                <!-- Content area -->
                <div class="content">
                     
                    <!-- Basic datatable -->
                   
                    <div class="map" id="mapCanvas"></div>
                   
                    <!-- /basic datatable -->
                </div>
                <!-- /content area -->
                <!-- Footer -->
                <?php $this->load->view('inc_footer');?>
                <!-- /footer -->
            </div>
            <!-- /main content -->
        </div>
        <!-- /page content -->
      
    </body>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi7d58LYt4z5lBjfcLM9iOs4uXfZF60qk"></script>
    <script>
     
function initMap() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap'
    };
                    
    // Display a map on the web page
    map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);
    map.setTilt(50);
        
    // Multiple markers location, latitude, and longitude
        
    // Multiple markers location, latitude, and longitude
    var markers = [
        <?php if($result){
            //while($row = $result->fetch_assoc()){
			foreach($result as $row){
                $event_name = $this->common->getDbValue($row['first_name']) ." " .$this->common->getDbValue($row['last_name']);
					$latitude = $this->common->getDbValue($row['lat']);
					$longitude = $this->common->getDbValue($row['long']);				
					//echo $row['event_zipcode'];
					echo '["'.$event_name.'", '.$latitude.', '.$longitude.'],';
				 
            }
        }
        ?>
    ];
                        
    // Info window content
    var infoWindowContent = [
        <?php if($result){
			foreach($result as $row){
                $event_name = $this->common->getDbValue($row['first_name']) ." " .$this->common->getDbValue($row['last_name']);
				$mobile = $this->common->getDbValue($row['mobile']);				
		 ?>
                ['<div class="info_content">' +
                '<h3><?php echo $event_name; ?></h3>' +
                '<p><?php echo $mobile; ?></p>' + '</div>'],
        <?php } } ?>
    ];
        
    // Add multiple markers to map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Place each marker on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });
        
        // Add info window to marker    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Center the map to fit all markers on the screen
        map.fitBounds(bounds);
    }

    // Set zoom level
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(12);
        google.maps.event.removeListener(boundsListener);
    });
    
}
function moveBus( map, marker ) {

marker.setPosition( new google.maps.LatLng( 0, 0 ) );
map.panTo( new google.maps.LatLng( 0, 0 ) );

};
// Load initialize function
google.maps.event.addDomListener(window, 'load', initMap);
</script>
</html>