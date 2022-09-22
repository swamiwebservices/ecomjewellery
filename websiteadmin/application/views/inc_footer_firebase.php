 
<input type="hidden" id="isload" name="isload" value="0" />
<input type="hidden" id="isload2" name="isload2" value="0" />
<input type="hidden" id="fcmtokenid" name="fcmtokenid" value="" />
<input type="hidden" id="today_date_temp" name="today_date_temp" value="<?php echo date("Ymd")?>" />
<input type="hidden" id="today_date_temp_prev" name="today_date_temp_prev" value="<?php echo date("Ymd",strtotime("-1 days")) ?>" />


<!-- Insert these scripts at the bottom of the HTML, but before you use any Firebase services -->

<!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-app.js"></script>

<!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
<script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-analytics.js"></script>

<!-- Add Firebase products that you want to use -->
<script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-messaging.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-database.js"></script>


<script>
// Your web app's Firebase configuration
// Your web app's Firebase configuration
var local=2;
if(local==1){
    var firebaseConfig = {
    apiKey: "AIzaSyAUp7CG1i2s1TDrvTrNawmj0ekpm_fofHk",
    authDomain: "bo-ice-project.firebaseapp.com",
    databaseURL: "https://bo-ice-project.firebaseio.com",
    projectId: "bo-ice-project",
    storageBucket: "bo-ice-project.appspot.com",
    messagingSenderId: "321767763807",
    appId: "1:321767763807:web:1f8d5eb200ce43daf810ea"
  };
} else {
var firebaseConfig = {
    apiKey: "AIzaSyCVqyWM3B10lM0CAGrIBnCph7XcYR_yGLU",
    authDomain: "thao-bo-ice.firebaseapp.com",
    databaseURL: "https://thao-bo-ice.firebaseio.com",
    projectId: "thao-bo-ice",
    storageBucket: "thao-bo-ice.appspot.com",
    messagingSenderId: "1070930080514",
    appId: "1:1070930080514:web:2eb88e8072d7a18f9f081b",
    measurementId: "G-RVR42PEZBS"
};
}
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
//firebase.analytics();
const messaging = firebase.messaging();
messaging.usePublicVapidKey('<?php echo FIREBASE_PUBLIC_KEY?>');

Notification.requestPermission().then(function(permission) {
    console.log('permiss', permission);
});

// Get Instance ID token. Initially this makes a network call, once retrieved
// subsequent calls to getToken will return from cache.
messaging.onTokenRefresh(function() {
    messaging.getToken().then(function(refreshedToken) {
        $("#fcmtokenid").val(refreshedToken);
        console.log('Token refreshed.', refreshedToken);
        setTokenSentToServer(false);
        // Send Instance ID token to app server.
        sendTokenToServer(refreshedToken);
    }).catch(function(err) {
        console.log('Unable to retrieve refreshed token ', err);
    });
});

messaging.onMessage(function(payload) {
    console.log("onMessage payload Message received. ", payload);
    //var audio = new Audio('https://notificationsounds.com/notification-sounds/for-sure-576/download/mp3');
    //                audio.play();  
					const notificationTitle = payload.notification.title;
					const notificationOptions = {
						body : payload.notification.body,
						icon : payload.notification.icon,
					};
					if (!("Notification" in window)) {
						console.log("This browser does not support system notifications.");
					} else if (Notification.permission === "granted") {
						// If it's okay let's create a notification
						var notification = new Notification(notificationTitle,
								notificationOptions);
						notification.onclick = function(event) {
							event.preventDefault();
							window.open(payload.notification.click_action, "_self");
							notification.close();
						}
					}
  ///  fcmFgUI(payload);
});

function initToken() {
    messaging.getToken().then(function(currentToken) {
        $("#fcmtokenid").val(currentToken);
        console.log("currentToken. ", currentToken);
        if (currentToken) {
            sendTokenToServer(currentToken);
        } else {
            console.log('No Instance ID token available. Request permission to generate one.');
            permissionRequiredUI();
            setTokenSentToServer(false);
        }
    }).catch(function(err) {
        console.log('An error occurred while retrieving token. ', err);
        setTokenSentToServer(false);
    });
}

function sendTokenToServer(currentToken) {
    $.ajax({
            type: 'POST',
            url: "<?php echo site_url('dashboard/registertoken')?>",
            //async: false,			 
            data: {
                'deviceid': currentToken

            },
            success: function(ajaxresult) {

              //  alert(ajaxresult);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
               // alert('Error1');
            }
        });
    if (!isTokenSentToServer()) {
        console.log('Sending token to server...');
        // TODO(developer): Send the current token to your server.
        // get old token
        // api del old token
        // api metch
       
        setTokenSentToServer(true);
        // senf topic api to app server
        //   subTopic();
    } else {
        console.log('Token already sent to server so won\'t send it again unless it changes');
    }
}

function requestPermission() {
    console.log('Requesting permission...');
    messaging.requestPermission().then(function() {
        initToken();
    }).catch(function(err) {
        console.log('Unable to get permission to notify.', err);
    });
}

function deleteToken() {
    messaging.getToken().then(function(currentToken) {
        messaging.deleteToken(currentToken).then(function() {
            console.log('Token deleted.');
            setTokenSentToServer(false);
            initToken();
        }).catch(function(err) {
            console.log('Unable to delete token. ', err);
        });
    }).catch(function(err) {
        console.log('Error retrieving Instance ID token. ', err);
    });
}


function fcmFgUI(payload) {
    
                   /*  var audio = new Audio('https://notificationsounds.com/notification-sounds/for-sure-576/download/mp3');
                    audio.play(); */
                    
					console.log('onMessage fcmFgUI', payload);
					const notificationTitle = payload.data.title;
					const notificationOptions = {
						body : payload.data.body,
						icon : payload.data.icon,
					};
					if (!("Notification" in window)) {
						console.log("This browser does not support system notifications.");
					} else if (Notification.permission === "granted") {
						// If it's okay let's create a notification
						var notification = new Notification(notificationTitle,notificationOptions);
						notification.onclick = function(event) {
							event.preventDefault();
							window.open(payload.data.click_action, "_self");
							notification.close();
						}
                    }
                    
 /*    messaging.onMessage((payload) => {

        var title = payload.notification.title;

        var options = {
            body: payload.notification.body,
            icon: payload.notification.icon,
            image: payload.notification.image,
            click_action: payload.notification.click_action,
        };
        var myNotification = new Notification(title, options);

        console.log('aa Message received. ', payload);
    }); */
}

function subTopic() {
    // TODO
}

function permissionRequiredUI() {
    // TODO
}

function isTokenSentToServer() {
    if (window.localStorage.getItem('sentToServer') == 1) {
        return true;
    }
    return false;
}

function setTokenSentToServer(sent) {
    if (sent) {
        window.localStorage.setItem('sentToServer', 1);
    } else {
        window.localStorage.setItem('sentToServer', 0);
    }
}

initToken();


//var dbRef = firebase.database();
today_date_temp =  $("#today_date_temp").val();
var today_date_temp_prev =  $("#today_date_temp_prev").val();

//alert(today_date_temp);
const dbrefObject = firebase.database().ref('orderlist/'+today_date_temp);
const dbrefObject_driver = firebase.database().ref('checkinout/'+today_date_temp);

firebase.database().ref('orderlist/'+today_date_temp_prev) // create a reference to the driver
        .remove();
firebase.database().ref('checkinout/'+today_date_temp_prev) // create a reference to the driver
		.remove();
//alert(dbrefObject);

///////////////////////////////

dbrefObject.on('child_added', function(snapshot) {
    console.log('child_added. ', snapshot.val());
   // var audio = new Audio('https://notificationsounds.com/notification-sounds/for-sure-576/download/mp3');
 //   audio.play(); 
});

dbrefObject.on('child_changed', function(snapshot) {
    console.log('child_changed. ', snapshot.val());
  // var audio = new Audio('https://notificationsounds.com/notification-sounds/for-sure-576/download/mp3');
  //   audio.play();  
   //  var tone = document.getElementById("tone");
   // tone.play();
});
dbrefObject.on('child_removed', function(snapshot) {
    console.log('child_removed	. ', snapshot.val());

});
dbrefObject.on('child_moved', function(snapshot) {
    console.log('child_moved. ', snapshot.val());

});

///driver
dbrefObject_driver.on('child_added', function(snapshot) {
    console.log('child_added. ', snapshot.val());
   // var audio = new Audio('https://notificationsounds.com/notification-sounds/for-sure-576/download/mp3');
 //   audio.play(); 
});

dbrefObject_driver.on('child_changed', function(snapshot) {
    console.log('child_changed. ', snapshot.val());
  // var audio = new Audio('https://notificationsounds.com/notification-sounds/for-sure-576/download/mp3');
  //   audio.play();  
   //  var tone = document.getElementById("tone");
   // tone.play();
});
dbrefObject_driver.on('child_removed', function(snapshot) {
    console.log('child_removed	. ', snapshot.val());

});
dbrefObject_driver.on('child_moved', function(snapshot) {
    console.log('child_moved. ', snapshot.val());

});


//


dbrefObject.on('value', function(snapshot) {
    console.log('on value Message received. ', snapshot.val());
    var audio = new Audio('<?php echo base_urL()?>firebase/for-sure.mp3');
    var isload = parseInt($("#isload").val());
    if(isload==1){
        audio.play();  
    }

    console.log('isload. ', isload);
    //   alert(objDiv.innerHTML);
    //  var tone = document.getElementById("tone");
 //   tone.play();
  //alert(111);
   
    //topnotificationlist
    $("#topnotificationlist").empty();
    var orderlistarr = [];
    snapshot.forEach(function(childSnapshot) {
										var childKey = childSnapshot.key;
										var childData = childSnapshot.val();
									//	console.log('childKey', childKey);
									//	console.log('childData',childData.customername);
                                    orderlistarr.push(childData);

                                               /*  var li_data = '<tr >'
                                                + '<td class="mr-3">'
                                                +  '<a href="<?php echo site_url("orders/orderdetail/");?>'+childData.oorder_uid+'">'+ childData.invoice_no + '</a></td><td>  '+  childData.customername 
                                                + '   </td>'
                                                + '   <td >'
                                 
                                                +            childData.total
                                                            + '      </td>'
                                                            + '     <td>'
                                                            +       childData.status
                                                            + '    </td>'
                                                            + '   </tr>';
										$('#topnotificationlist').append(li_data);
                                        $("#isload").val(1) ;   
                                        $("#topbell").addClass("bg-danger"); 	  */
                                    });

            orderlistarr = orderlistarr.reverse();
            $("#topnotificationlist").empty();
            var i;
            console.log(" orderlistarr ",orderlistarr);
            jQuery.each(orderlistarr, (index, item) => {
                var li_data = '<tr >'
                                                + '<td class="mr-3">'
                                                +  '<a href="<?php echo site_url("orders/orderdetail/");?>'+item.oorder_uid+'">'+ item.invoice_no + '</a></td><td>  '+  item.customername 
                                                + '   </td>'
                                                + '   <td >'
                                 
                                                +            item.total
                                                            + '      </td>'
                                                            + '     <td>'
                                                            +       item.status
                                                            + '    </td>'
                                                            + '   </tr>';
										$('#topnotificationlist').append(li_data);
                                        $("#isload").val(1) ;   
                                        $("#topbell").addClass("bg-danger"); 	 
            });
                                                
                                    
});


dbrefObject_driver.on('value', function(snapshot) {
    console.log('on value Message received. ', snapshot.val());
    var audio = new Audio('<?php echo base_urL()?>firebase/for-sure.mp3');
    var isload2 = parseInt($("#isload2").val());
    if(isload2==1){
        audio.play();  
    }

    console.log('isload2. ', isload2);
    //   alert(objDiv.innerHTML);
    //  var tone = document.getElementById("tone");
 //   tone.play();
  //alert(111);
   
    //driver_topnotificationlist
    $("#driver_topnotificationlist").empty();
    var driver_orderlistarr = [];
    snapshot.forEach(function(childSnapshot) {
										var childKey = childSnapshot.key;
										var childData = childSnapshot.val();
									//	console.log('childKey', childKey);
									//	console.log('childData',childData.customername);
                                    driver_orderlistarr.push(childData);

                                              
                                    });

            driver_orderlistarr = driver_orderlistarr.reverse();
            $("#driver_topnotificationlist").empty();
            var i;
            console.log(" driver_orderlistarr ",driver_orderlistarr);
            jQuery.each(driver_orderlistarr, (index, item) => {
                var li_data = '<tr >'
                                                + '<td class="mr-3">'
                                                +   item.driver_name 
                                                + '   </td>'
                                                + '   <td >'
                                 
                                                +            item.date_time
                                                            + '      </td>'
                                                            + '     <td>'
                                                            +       item.checkinout
                                                            + '    </td>'
                                                            + '   </tr>';
										$('#driver_topnotificationlist').append(li_data);
                                        $("#isload2").val(1) ;   
                                        $("#topbell2").addClass("bg-danger"); 	 
            });
                                                
                                    
});

$('#driver_topmenunotificationid').on('click', function(e) {
    $("#topbell2").removeClass("bg-danger");
});
$('#topmenunotificationid').on('click', function(e) {
    $("#topbell").removeClass("bg-danger");
});
//datatablecustom_notification
var table = $('.datatablecustom_notification').DataTable({
        columnDefs: [{
            orderable: false,
            targets: [0]
        }],
        autoWidth: true,

        scrollX: true,
        scrollY: '35vh',
        scrollCollapse: false,
        "paging": false,
        "bLengthChange": false, //thought this line could hide the LengthMenu
        "bInfo": false,
        "aaSorting": [],
        /*  fixedColumns : {
					leftColumns : 2,
					rightColumns : 1
				},  */
        "bFilter": false,
        responsive: true,
    });

</script>
