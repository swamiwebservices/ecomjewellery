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
    private $error = array();
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

        // Coupon
        //$coupon = $this->common->mysql_safe_string($_POST['coupon']);
        if (isset($_POST['coupon']) && $this->validateCoupon()) {
            $coupon = $this->input->post('coupon');
            $coupon_sess = array('coupon' => $coupon);
            $this->session->set_userdata($coupon_sess);

            $success_sess = array('success' => 'Success: Your coupon discount has been applied! ');

            $this->session->set_userdata($success_sess);

            redirect(site_url('cart'));
        }

        //coupon
        $coupon_temp = $this->session->userdata('coupon');
        if (isset($_POST['coupon'])) {
            $data['coupon'] = $this->input->post('coupon');

        } elseif (isset($coupon_temp)) {
            $data['coupon'] = $this->session->userdata('coupon');
        } else {
            $data['coupon'] = '';
        }
        //coupon

        $success  = $this->session->userdata('success');
        if (isset($success) ) {
            $data['success'] = $success;

            $this->session->unset_userdata('success');
        } else {
            $data['success'] = '';
        }

        $totals = array();
        $taxes = $this->services->getTaxes();
        $total = 0;

        // Because __call can not keep var references so we put them into an array.
        $total_data = array(
            'totals' => &$totals,
            'taxes' => &$taxes,
            'total' => &$total,
        );

        //sub_total

        $totals[] = array(
            'code' => 'sub_total',
            'class' => '',
            'title' => 'Sub-Total',
            'value' => $cartSubtotal,
            'sort_order' => 1,
        );

        $total_data['total'] = $cartSubtotal;

        //coupon
        $coupon_temp = $this->session->userdata('coupon');
        if (isset($coupon_temp)) {

            $coupon_info = $this->services->getCoupon($coupon_temp);

            if ($coupon_info) {
                $discount_total = 0;

                if (!$coupon_info['product']) {
                    $sub_total = $cartSubtotal;
                } else {
                    $sub_total = 0;

                    // foreach ($this->services->getProducts()  as $product) {
                    //     if (in_array($product['product_id'], $coupon_info['product'])) {
                    //         $sub_total += $product['total'];
                    //     }
                    // }
                }

                if ($coupon_info['type'] == 'F') {
                    $coupon_info['discount'] = min($coupon_info['discount'], $sub_total);
                }

                if ($coupon_info['type'] == 'F') {
                    $discount = $coupon_info['discount'];
                } elseif ($coupon_info['type'] == 'P') {
                    $discount = $cartSubtotal / 100 * $coupon_info['discount'];
                }
                $discount_total = $discount;

                //$totals['total'] += $sub_total;
                //$total = $sub_total;
                //end of sub_total

                $total_data['total'] = $sub_total;

                $totals[] = array(
                    'code' => 'coupon',
                    'class' => '',
                    'title' => sprintf('Coupon(%s)', $coupon_temp),
                    'text' => $this->services->format($discount_total),
                    'value' => -$discount_total,
                    'sort_order' => 2,
                );

                //$total -= $discount_total;
                $total_data['total'] -= $discount_total;
            }
        }
        //end of coupon

            //total module
			$totals[] = array(
				'code'       => 'total',
				'class'       => 'total-pay',
				'title'      => 'Total',
				'value'      => max(0, $total),
				'sort_order' => 100
			);
			//end of total module
			
			$sort_order = array();
			 
			foreach ($totals as $key => $value) {
				 
				if(sizeof($value)>0){
						$sort_order[$key] = $value['sort_order'];
				} else {
						$sort_order[$key] = '';
				}
			
				
			}
			//echo "<pre>";
			 //	print_r($totals);
			array_multisort($sort_order, SORT_ASC, $totals);
			
          

			$data['totals'] = array();

			foreach ($totals as $total) {
				$data['totals'][] = array(
					'class' => $total['class'],
					'title' => $total['title'],
					'text'  => $this->services->format($total['value'])
				);
			}
			//print_r($totals);

        //print_r($total_data) ;
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

        $json['success'] = sprintf('Success: You have added <a href="%s">%s</a> to your <a href="%s">Shopping cart</a>!', site_url('product-detail/' . $productdetail['slug_name'] ), $productdetail['name'], site_url('cart'));
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
    public function coupon()
    {

        //coupon
        $json['redirect'] = site_url('cart');

        //$coupon = $this->common->mysql_safe_string($_POST['coupon']);
        if (isset($_POST['coupon']) && $this->validateCoupon()) {
            $coupon = $this->input->post('coupon');
            $coupon_sess = array('coupon' => $coupon);
            $this->session->set_userdata($coupon_sess);

            $success_sess = array('success' => 'Success: Your coupon discount has been applied! ');

            $this->session->set_userdata($success_sess);
            $json['error'] =false;
            $json['redirect'] = site_url('cart');
            //redirect(site_url('cart'));

        } else {
                $warning_sess = array('warning' => 'Warning: Coupon is either invalid, expired or reached it\'s usage limit! ');
                $this->session->set_userdata($warning_sess);
                $json['error'] =true;
                $json['msg'] = 'Warning: Coupon is either invalid, expired or reached it\'s usage limit! ';
        }
        echo json_encode($json);
    }
    protected function validateCoupon()
    {
        $coupon_info = $this->services->getCoupon($this->input->post('coupon'));
        //print_r($coupon_info);
        if (!$coupon_info) {
            $warning_sess = array('warning' => 'Warning: Coupon is either invalid, expired or reached it\'s usage limit! ');
            $this->session->set_userdata($warning_sess);
            $this->error['warning'] = 'Warning: Coupon is either invalid, expired or reached it\'s usage limit!';
        }

        if (!$this->error) {
            return true;
        } else {
            return false;
        }
    }

}
