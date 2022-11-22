<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cart extends CI_Controller
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
    public $controller = "cart";
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

        // $data['config_maintenance'] = $config_maintenance = (int)$this->common->get('config_maintenance');

        // if($config_maintenance){
        //      redirect("maintenance");
        //       exit;
        // }
        if (empty($this->session->userdata('domain_id'))) {
            $this->session->set_userdata('domain_id', '1');

        }

        if (empty($this->session->userdata('domain_id'))) {
            $this->session->set_userdata('domain_id', '1');

        }
        $this->domain_id = $this->services->getDomainId();

        $ar_session_data['last_page_visited'] = site_url("cart");
        $this->session->set_userdata($ar_session_data);

    }
    public function index()
    {

        $cartinfo = $this->services->getCartinfo();
        $cartSubtotal = $this->services->getCartSubtotal();
        //print_r($cartinfo);
        $data['record']['items'] = $cartinfo;
        $data['record']['shipping_carges'] = 100;
        $data['record']['subtotal'] = $cartSubtotal;

        $this->load->view("cart", $data);

    }
    public function checkout()
    {

        // $cartinfo = $this->services->getCartinfo();
        // $cartSubtotal = $this->services->getCartSubtotal();
        // //print_r($cartinfo);
        // $data['record']['items'] = $cartinfo;
        // $data['record']['shipping_carges'] = 100;
        // $data['record']['subtotal'] = $cartSubtotal;

        // $this->load->view("cart", $data);

    }
    public function add()
    {
        $json = array();

        $domain_id = $this->services->getDomainId();

        $product_id = (isset($_POST['product_id'])) ? $this->input->post('product_id') : '';
        $cart_qty = (isset($_POST['cart_qty'])) ? (int) $this->input->post('cart_qty') : 1;

        $params_prd['product_id'] = $product_id;
        $data['productdetail'] = $productdetail = $this->services->getProductDetail($params_prd);

        if (sizeof($productdetail) <= 0) {
            //redirect('home');
            //die();
            $param_cart = [];
            $cartItems = $this->services->addtocart($param_cart);
        } else {
            if (isset($_POST['cart_qty']) && ((int) $this->input->post('cart_qty') >= $productdetail['minimum'])) {
                $cart_qty = (int) $this->input->post('cart_qty');
            } else {
                $cart_qty = $productdetail['minimum'] ? $productdetail['minimum'] : 1;
            }

            if ($cart_qty > $productdetail['quantity']) {
                $cart_qty = $productdetail['quantity'];
            }

            $price_json = json_decode($productdetail['price_json'], true);
            $quantity = $price_json['quantity'][$domain_id];
            $mrp = $price_json['mrp'][$domain_id];
            $sellprice = $price_json['sellprice'][$domain_id];

            $param_cart['product_id'] = $product_id;
            $param_cart['quantity'] = $cart_qty;
            $param_cart['price'] = $sellprice;
            $cartItems = $this->services->addtocart($param_cart);
        }

        $json['cartItems'] = $cartItems;
        // print_r($_REQUEST);
        // $json['redirect'] ='ddd';
        $pro_slug = "aaa-aa";
        $productdetail['product_id'] = 10;
        $productdetail['name'] = $productdetail['name'];

        $json['success'] = sprintf('Success: You have added <a href="%s">%s</a> to your <a href="%s">Shopping cart</a>!', site_url('product-detail/' . $productdetail['slug_name'] . '/' . $productdetail['product_id']), $productdetail['name'], site_url('cart'));
        $json['productdetail'] = $productdetail;
        echo json_encode($json);
        die();
    }
    public function remove()
    {
        $json = array();

        $product_id = (isset($_POST['product_id'])) ? $this->input->post('product_id') : '';

        $param_cart['product_id'] = $product_id;
        $cartItems = $this->services->doRemoveItemCart($param_cart);
        $json['cartItems'] = $cartItems;
        echo json_encode($json);
        die();
    }
    public function cartinfo()
    {

        $domain_id = $this->services->getDomainId();
        $cartinfo = $this->services->getCartinfo();
        $cartSubtotal = $this->services->getCartSubtotal();
        //print_r($cartinfo);
        $data['record']['items'] = $cartinfo;
        $data['record']['subtotal'] = $cartSubtotal;
        //print_r($data['record']);
        $this->load->view('cartinfo', $data);
        // print_r($cartinfo);
    }
    public function update()
    {
        //$this->load->language('checkout/cart');
        //$this->input->post('coupon');

        $json = array();
        //$coupon = $this->common->mysql_safe_string($_POST['coupon']);
        if (!empty($this->input->post('quantity'))) {
            foreach ($this->input->post('quantity') as $key => $value) {
                $this->services->updatecartqty($key, $value);
            }

            $success_sess = array('success' => 'Success: You have modified your shopping cart!');

            $this->session->set_flashdata($success_sess);

            $array_items = array('shipping_method' => '', 'shipping_methods' => '', 'payment_method' => '', 'payment_methods' => '', 'reward' => '');
            $this->session->unset_userdata($array_items);

            redirect(site_url('cart'));
        }

    }
}
