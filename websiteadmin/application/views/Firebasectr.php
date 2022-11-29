<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Kreait\Firebase;
use Kreait\Firebase\Exception\MessagingException;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Util\JSON;

class Firebasectr extends CI_Controller
{
    public $db;
    public $m_act = 0;
    public $s_act = 1;

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('common');
        //$this->load->model('services');
        $this->load->model('ecommercemodal');
        $this->load->model('currencymodal');
        $this->load->helper('security');
        $this->load->helper('url_helper');
//        $this->load->model('firebase');

        $this->db = $this->load->database('default', true);
        if ( function_exists( 'date_default_timezone_set' ) )
        date_default_timezone_set('Asia/Bangkok');
    
    }
    
    public function setFirebase() {
        $todaydate = date("Ymd");
        $serviceAccount = Firebase\ServiceAccount::fromJsonFile(__DIR__.'/bo-ice-2f1ce71da14c.json');


         $firebase = (new Firebase\Factory())
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://bo-ice.firebaseio.com')
        ->create();
        $database = $firebase->getDatabase();

        $newPost = $database
    ->getReference('orderlist/'.$todaydate)
    ->push([
        'title' => 'Post title',
        'body' => 'This should probably be longer.'
    ]);
    }
    //notification
    public function sendNotification_ok($b="c")
    {
        $serviceAccount = Firebase\ServiceAccount::fromJsonFile(__DIR__.'/bo-ice-2f1ce71da14c.json');
        $firebase = (new Firebase\Factory())
            ->withServiceAccount($serviceAccount)
            ->create();
        $messaging = $firebase->getMessaging();
        $notification = [
            'title' => 'New Order1 ',
            'body' => 'You have new Order1',
            'sound' => 'http://ice.shreewebs.com/for-sure.mp3',
            'vibrate' => true,
            'click_action' => 'http://google.com',
            'icon' => 'http://ice.shreewebs.com/secu_doice/global_assets/images/logo_login.png',
            'image' => 'http://ice.shreewebs.com/secu_doice/global_assets/images/logo_login.png'
        ];
      
        if($b=="c"){
            $deviceToken = "dfxeskkTgUnj5zmEeS3DTQ:APA91bHVN7oGoScmdZPTCaimU2T5u0Bgsjhb9RcCzFFrB_ctpKhM5Q_G6NubNkj2LzX6CNHoN9kkVzPMR3U5PtgXa7g30hIUKc39aM-4775m3N6hYe5G2abNGiwrUtsbLev3Eav2CBw2";
            } else {
                $deviceToken = "fmq_a5JaS5SO05h_xLAsxC:APA91bEALQsurJ71RuKzTMcvkQnLiSI2ImyhO2l0AyJmbtjgFWdhbDjIVF9pkv49rSt4MPEaApIq_dP_2jHT0148tSj3LmKixuIbuijJWQKS37FW8pITZNldbRPIY-QUhV0bonQseRwW";
            }
        $data = [
            'order_id' => '1',
        ];
        $message = CloudMessage::withTarget('token', $deviceToken)
            ->withNotification($notification) // optional
            ->withData($data) // optional
        ;
      /*   $message1 = CloudMessage::fromArray([
            'token' => $deviceToken,
            'notification' => ['title' => 'Order', 'body' => 'New Order'],
            'data' => $data, // optional
            'android' => [
                'priority' => 'high',
                'notification' => [
                    'default_vibrate_timings' => true,
                    'default_sound' => true,
                    'notification_count' => 1,
                    'color' => '#200e57',
                    'notification_priority' => 'PRIORITY_HIGH', // PRIORITY_LOW , PRIORITY_DEFAULT , PRIORITY_HIGH , PRIORITY_MAX
                ],
            ],

        ]); */

        try {
            echo 'Sending ' . PHP_EOL . JSON::encode($message) . PHP_EOL;
            $messaging->send($message);
            echo 'SUCCESS' . PHP_EOL;
        } catch (MessagingException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function sendNotification($b="c")
    {
        $serviceAccount = Firebase\ServiceAccount::fromJsonFile(__DIR__.'/bo-ice-2f1ce71da14c.json');
        $firebase = (new Firebase\Factory())
            ->withServiceAccount($serviceAccount)
            ->create();
        $messaging = $firebase->getMessaging();
        $notification = [
            'title' => 'New Order1 ',
            'body' => 'You have new Order1',
        ];
        if($b=="c"){
            $deviceToken = "dfxeskkTgUnj5zmEeS3DTQ:APA91bHVN7oGoScmdZPTCaimU2T5u0Bgsjhb9RcCzFFrB_ctpKhM5Q_G6NubNkj2LzX6CNHoN9kkVzPMR3U5PtgXa7g30hIUKc39aM-4775m3N6hYe5G2abNGiwrUtsbLev3Eav2CBw2";
            } else {
                $deviceToken = "fmq_a5JaS5SO05h_xLAsxC:APA91bEALQsurJ71RuKzTMcvkQnLiSI2ImyhO2l0AyJmbtjgFWdhbDjIVF9pkv49rSt4MPEaApIq_dP_2jHT0148tSj3LmKixuIbuijJWQKS37FW8pITZNldbRPIY-QUhV0bonQseRwW";
            }

        $data = [
            'order_id' => '1',
        ];
        /*  $message = CloudMessage::withTarget('token', $deviceToken)
        ->withNotification($notification) // optional
        ->withData($data) // optional
        ;   */

        $deviceTokens = ['duN9tPl8rAcUbQf5n8EXUR:APA91bE2iT0ZeQMQYuALXrIQmsGM4hLU7nhwzlwGpdfICRryU7rDDK63AMDzxEUjZp_IQg2MPF9ZgAJ6pxBS0tXnJDdaolyfd6qdOPMqKiuTigoLCcl0QZ3_hIIUB-nkFn6aIOv1bhEI',
        'frY8lMM1kb7hj2Nx12v03p:APA91bElWZWnIqVC2P8t07xWFDX167_ydgONmm2Cdh4b7LUFAixsc4pLbN5pYC1Ik4dBIRjQau_5QkDvhTcyeAGbP0erPmWd5Jcd5v5z85Zlxbp_WPxGHIFDi6az7R9QnvxTDVazwHQ-',
        'dfxeskkTgUnj5zmEeS3DTQ:APA91bHVN7oGoScmdZPTCaimU2T5u0Bgsjhb9RcCzFFrB_ctpKhM5Q_G6NubNkj2LzX6CNHoN9kkVzPMR3U5PtgXa7g30hIUKc39aM-4775m3N6hYe5G2abNGiwrUtsbLev3Eav2CBw2', 'fmq_a5JaS5SO05h_xLAsxC:APA91bEALQsurJ71RuKzTMcvkQnLiSI2ImyhO2l0AyJmbtjgFWdhbDjIVF9pkv49rSt4MPEaApIq_dP_2jHT0148tSj3LmKixuIbuijJWQKS37FW8pITZNldbRPIY-QUhV0bonQseRwW'];
        $message1 = CloudMessage::fromArray([
            'token' => $deviceToken,
            'notification' => [
            'title' => 'New Order2 ',
            'body' => 'You have new Order2',
            'sound' => 'http://ice.shreewebs.com/for-sure.mp3',
            'vibrate' => true,
            'click_action' => 'http://google.com',
            'icon' => 'http://ice.shreewebs.com/secu_doice/global_assets/images/logo_login.png',
            'image' => 'http://ice.shreewebs.com/secu_doice/global_assets/images/logo_login.png'
            ],
            'data' => $data, // optional
            'android' => [
                'priority' => 'high',
                'notification' => [
                    'default_vibrate_timings' => true,
                    'default_sound' => true,

                    'notification_count' => 42,
                    'color' => '#200e57',
                    'notification_priority' => 'PRIORITY_HIGH', // PRIORITY_LOW , PRIORITY_DEFAULT , PRIORITY_HIGH , PRIORITY_MAX
                ],
            ],

        ]);
        $message = CloudMessage::new (); // Any instance of Kreait\Messaging\Message
        //$message = $message->withNotification($notification);

        try {
            echo 'Sending ' . PHP_EOL . JSON::encode($message1) . PHP_EOL;
            $report = $messaging->sendMulticast($message1, $deviceTokens);
            echo 'SUCCESS' . PHP_EOL;
        } catch (MessagingException $e) {
            //  echo 'ERROR: ' . $e->getMessage();
        }

        echo 'Successful sends: '.$report->successes()->count().PHP_EOL;
         echo 'Failed sends: '.$report->failures()->count().PHP_EOL;

        /*  try {
    echo 'Sending ' . PHP_EOL . JSON::encode($message1) . PHP_EOL;
    $messaging->send($message1);
    echo 'SUCCESS' . PHP_EOL;
    } catch (MessagingException $e) {
    echo 'ERROR: ' . $e->getMessage();
    }   */
    }
    public function sendNotificationcurl($b="c")
    {

        $url = "https://fcm.googleapis.com/fcm/send";
        if($b=="c"){
        $token = "duN9tPl8rAcUbQf5n8EXUR:APA91bE2iT0ZeQMQYuALXrIQmsGM4hLU7nhwzlwGpdfICRryU7rDDK63AMDzxEUjZp_IQg2MPF9ZgAJ6pxBS0tXnJDdaolyfd6qdOPMqKiuTigoLCcl0QZ3_hIIUB-nkFn6aIOv1bhEI";
        } else {
            $token = "fmq_a5JaS5SO05h_xLAsxC:APA91bEALQsurJ71RuKzTMcvkQnLiSI2ImyhO2l0AyJmbtjgFWdhbDjIVF9pkv49rSt4MPEaApIq_dP_2jHT0148tSj3LmKixuIbuijJWQKS37FW8pITZNldbRPIY-QUhV0bonQseRwW";
        }
        $serverKey = 'AAAArAMsTHc:APA91bGjgPzwM-bvZShuFU3U_UFZoVVOQHVhwRle9ziP89mhsCqbUy7-OjGTl5urSy6FjNPvW_lQOUZpLsO3YCDHZ9ZNhVg8Y5DLLZZz_t-yxUTDfJuQKPGokXrOBGhE-vdmBLnZgrUS';

      
     //   $title = "Title";
     //   $body = "Body of the message";
     //   $notification = array('title' => $title, 'text' => $body, 'sound' => 'default', 'badge' => '1');

        $notification = [
            'title' => 'New Order2 ',
            'body' => 'You have new Order2',
            'sound' => 'http://ice.shreewebs.com/for-sure.mp3',
            'vibrate' => true,
            'click_action' => 'http://google.com',
            'icon' => 'http://ice.shreewebs.com/secu_doice/global_assets/images/logo_login.png',
            'image' => 'http://ice.shreewebs.com/secu_doice/global_assets/images/logo_login.png'
        ];
        $data = [
            'order_id' => '1',
        ];
        $arrayToSend = array('to' => $token, 'notification' => $notification, 'priority' => 'high', 'data' => $data);
        $json = json_encode($arrayToSend);
        $headers = array();
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: key=' . $serverKey;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//Send the request
        $response = curl_exec($ch);
//Close request
        if ($response === false) {
            die('FCM Send Error: ' . curl_error($ch));
        }
        curl_close($ch);

    }

}
//
