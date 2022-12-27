<?php
defined('BASEPATH') or exit('No direct script access allowed');
 
class Import extends CI_Controller
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
    public $controller = "import";
    public $domain_id = 1;
    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');

        $this->load->model('common');
        $this->load->model('services');
        $this->load->model('configmodal');

        $this->load->helper('security');
        $this->load->library('email');
        $this->load->helper('url_helper');

        

    }
    public function index()
    {
		  $image_old_path_only = FCPATH."application/controllers/" ;
		if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {
			if (isset($_FILES['main_image']['name']) && $_FILES['main_image']['name'] != '') {
			     $newname = $image_old_path_only.$_FILES['main_image']['name'];
				$copied = copy($_FILES['main_image']['tmp_name'], $newname);
			}	
		}
		$data['import'] = "ddd";

        $this->load->view("import", $data);
       
    }

}

?>