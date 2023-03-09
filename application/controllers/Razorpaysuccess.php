<?php
defined('BASEPATH') or exit('No direct script access allowed');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

class Razorpaysuccess extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public $controller = "razorpaysuccess";
    public $domain_id = 1;
    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');

        $this->load->model('common');
        $this->load->model('services');

        $this->load->helper('security');
        $this->load->library('email');
        $this->load->helper('url_helper');

       
        $this->domain_id = $this->services->getDomainId();

    }

    public function index($uuid = "")
    {
        print_r($_POST);
        print_r($_GET);

        if (empty($_POST['razorpay_payment_id']) === false) {
            $data['razorpay_keyId'] = $razorpay_keyId = $this->services->getold('razorpay_keyId');
            $data['razorpay_keySecret'] = $razorpay_keySecret = $this->services->getold('razorpay_keySecret');
            $razorapi = new Api($razorpay_keyId, $razorpay_keySecret);

            $data['order_info'] = $this->services->getOrderUUID($uuid);
            $order_return_transaction_id = (isset($_POST['razorpay_payment_id'])) ? filter_var($_POST['razorpay_payment_id'], FILTER_SANITIZE_STRING) : '0';
            try
            {
                // Please note that the razorpay order ID must
                // come from a trusted source (session here, but
                // could be database or something else)
                $attributes = array(
                    'razorpay_order_id' => $_SESSION['razorpay_order_id'],
                    'razorpay_payment_id' => $_POST['razorpay_payment_id'],
                    'razorpay_signature' => $_POST['razorpay_signature'],
                );

                $razorapi->utility->verifyPaymentSignature($attributes);
                $success = true;
            } catch (SignatureVerificationError $e) {

                $order_return_data = json_encode($_POST);

                $sql = "UPDATE m_order  SET return_payment_status='Fail',return_payment_data='$order_return_data' WHERE uuid='$uuid'";

                $this->db->query($sql);

                $success = false;
                $error = 'Razorpay Error : ' . $e->getMessage();
                $data['error'] = $error;
            }
        }
        if ($success === true) {
        $this->load->view('checkout_success', $data);
        } else {
            $this->load->view('checkout_success', $data);
        }
    }
}
