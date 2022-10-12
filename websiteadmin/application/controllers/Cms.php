<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Cms
 *
 * @package Getlised.in
 * @subpackage Manage Cms
 * @category Cms
 * @version    1.0
 * @updated    21/04/2020
 */
 
class Cms extends CI_Controller
{
    public $db;
    public $title = "CMS";
    public $ctrl_name = 'cms';
    public $controller = 'cms';
    public $tbl_name = 'master_driver';
    public $pg_title = 'Cms';
 
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('common');
        $this->load->helper('security');
        $this->load->library('email');
        $this->load->helper('url_helper');
        $this->db = $this->load->database('default', true);
        $this->common->check_user_session();
    }

    public function index()
    {
        $this->notification();
    }

    public function notification()
    {

        $data['title'] = 'Notification';
        $data['l_s_act'] = 2;
        $data['sub_heading'] = 'Notification List';

        $search_qry = " WHERE  1=1 ";

        $data['results'] = $this->common->getRecordsLimit('site_notifications', $search_qry, 0, 0);

        $data['controller'] = $this->ctrl_name;

        $this->load->view('notification', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
    public function editnotification($id=0)
    {

        $session_user_data = $this->session->userdata('admin_user_data');
        $id = filter_var($id, FILTER_SANITIZE_STRING);
        $data['l_s_act'] = 3;
        
        $data['title'] = 'Notification';
        $data['sub_heading'] = 'Edit';
        $data['controller'] = $this->ctrl_name;
        $data['email_id'] = $id;
        $error = '';

        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

            $add_in = array();
            $add_in['description'] = $description = (isset($_POST['description'])) ? $this->common->mysql_safe_string($_POST['description']) : '';
            
            if ($description == '') {
                $error .= "Please enter description<br>";
            }
            
            if ($error == '') {

               
                $this->db->where('id', $id);
                $this->db->update('site_notifications', $add_in);

                $this->session->set_flashdata('success', 'Information updated succssfully!');
                redirect($this->ctrl_name . '/notification');
            } else {
                $this->session->set_flashdata('error', $error);
            }

            $data_info = $_POST;
        } else {

            $data_info = $this->common->getSingleInfoBy('site_notifications', 'id', $id, '*');
        }

        //print_r($data_info);
        if (sizeof($data_info) == 0) {
            $newdata = array('warning' => 'Please select data!');
            $this->session->set_flashdata($newdata);
            redirect($this->ctrl_name);
        }
        $data['records'] = $data_info;
        $this->load->view('editnotification', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
    
    public function emailtemplate()
    {
        $data['title'] = 'Email template';
        $data['l_s_act'] = 2;
        $data['sub_heading'] = 'Email template List';

        $search_qry = " WHERE  1=1 ";

        $data['results'] = $this->common->getRecordsLimit('site_email_template_master', $search_qry, 0, 0);

        $data['controller'] = $this->ctrl_name;

        $this->load->view('emailtemplate', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
   
    public function editemailtemplate($id=0)
    {

        $session_user_data = $this->session->userdata('admin_user_data');
        $id = filter_var($id, FILTER_SANITIZE_STRING);
        $data['l_s_act'] = 3;
        
        $data['title'] = 'Email template';
        $data['sub_heading'] = 'Edit';
        $data['controller'] = $this->ctrl_name;
        $data['email_id'] = $id;
        $error = '';

        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

            $add_in = array();
            $add_in['email_description'] = $email_description = (isset($_POST['email_description'])) ? $this->common->mysql_safe_string($_POST['email_description']) : '';
            $add_in['email_subject'] = $email_subject = (isset($_POST['email_subject'])) ? $this->common->mysql_safe_string($_POST['email_subject']) : '';
            if ($email_description == '') {
                $error .= "Please enter description<br>";
            }
            if ($email_subject == '') {
                $error .= "Please enter subject<br>";
            }
            if ($error == '') {

               
                $this->db->where('email_id', $id);
                $this->db->update('site_email_template_master', $add_in);

                $this->session->set_flashdata('success', 'Information updated succssfully!');
                redirect($this->ctrl_name . '/emailtemplate');
            } else {
                $this->session->set_flashdata('error', $error);
            }

            $data_info = $_POST;
        } else {

            $data_info = $this->common->getSingleInfoBy('site_email_template_master', 'email_id', $id, '*');
        }

        //print_r($data_info);
        if (sizeof($data_info) == 0) {
            $newdata = array('warning' => 'Please select data!');
            $this->session->set_flashdata($newdata);
            redirect($this->ctrl_name);
        }
        $data['records'] = $data_info;
        $this->load->view('editemailtemplate', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
    
    
    public function banner($start = 0, $otherparam = "")
    {
        
        $session_user_data = $this->session->userdata('user_data');

        $data['activaation_id'] = 101;
        $data['sub_activaation_id'] = '101_8';
        $data['title'] = $this->title;
        $data['start'] = $start;
        $data['maxm'] = $maxm = 20000;
        $data['sub_heading'] = 'Banner';
        $fun_name = $this->controller . '/banner';
        
        $domain_list = $this->config->item("DOMAINs");
        //print_r($domain_list);
        $data['controller'] = $this->controller;
        $data['fun_name'] = "banner";
        $resultdata = array();
        $sql = "select * from  wti_banners c where     (delete_status=0 or delete_status IS NULL)  order by sort_no";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $resultdata = $query->result_array();
        }
        $data['results'] = $resultdata;


        $this->load->view('cms_banner', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
    public function banner_action($id = "")
    {

        
        $session_user_data = $this->session->userdata('user_data');
        $data['back_link'] = $this->controller . '/banner';
        
        
        $data['listfun'] = 'banner';
        $data['activaation_id'] = 101;
        $data['sub_activaation_id'] = '101_8';
        $data['title'] = 'Banner';
        $data['id'] =  (isset($id)) ? $this->common->mysql_safe_string($id) : '';
        $data['sub_heading'] =  (isset($id) && $id!="") ? " Edit Data" : 'Add Data';
        
        $data['fun_name'] = 'banner_action/' . $id;
        $data['controller'] = $this->controller;

        $error = '';

		$error = '';

        $data_info = array();
       // print_r($_POST);exit;

        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {
       
            $add_in_m['domains'] = $domains = (isset($_POST['domains'])) ? implode(",",$_POST['domains']) : ""; 

            $add_in_m['banner_name'] = $banner_name = (isset($_POST['banner_name'])) ? $this->common->mysql_safe_string($_POST['banner_name']) : ''; 
            $add_in_m['banner_text'] = $banner_text = (isset($_POST['banner_text'])) ? $this->common->mysql_safe_string($_POST['banner_text']) : ''; 
            $add_in_m['banner_text2'] = $banner_text2 = (isset($_POST['banner_text2'])) ? $this->common->mysql_safe_string($_POST['banner_text2']) : ''; 
            $add_in_m['banner_url'] = $banner_url = (isset($_POST['banner_url'])) ? $this->common->mysql_safe_string($_POST['banner_url']) : ''; 
          	$add_in_m['sort_no'] = $sort_no = (isset($_POST['sort_no'])) ? $this->common->mysql_safe_string($_POST['sort_no']) : ''; 
            
			$add_in_m['status_flag'] = $status_flag = (isset($_POST['status_flag'])) ? $this->common->mysql_safe_string($_POST['status_flag']) : '0'; 
        	 
         
              //print_r($add_in_m);
           
            if ($banner_name == '') {$error .= "Please enter name  <br>";}
            if ($domains == '') {$error .= "Please select atleast 1 domain  <br>";}
             
            if($error==""){
                
                
                
                if ($_FILES['main_image']['name'] != '') {
              
                    $filename = "banner-".$this->common->tep_short_name_list($banner_name)."-" . $this->common->gen_key(4);
    
                    $upload = $this->common->UploadImage('main_image', '../uploads/banner/', 0, $height_thumb = '', $width_thumb = '', $filename);
    
                    if ($upload['uploaded'] == 'false') {
                        $error = $upload['uploadMsg'];
                    } else {
    
                        $add_in_m['main_image'] = $upload['imageFile'];
    
                       // $this->load->library('Kishoreimagelib');
                      //  $image_old_path_only = '../uploads/banner/';
                       // $this->kishoreimagelib->load('../uploads/banner/' . $add_in_m['main_image'])->set_background_colour("#ffffff")->resize(2000, 868, true)->save($image_old_path_only . "2000".  $add_in_m['main_image']);
    
                        // @unlink($image_old_path_only .   $add_in_m['main_image']);
                        // rename($image_old_path_only .  "2000". $add_in_m['main_image'],$image_old_path_only .   $add_in_m['main_image']);
    
                    }
    
                }
               
            }
            

            if ($error == '') {
             
                $add_in_m['add_date'] = date("Y-m-d h:i:s");
                if($id!=""){
                    $where = "banner_id = '" . $id . "'";
                    $update_status = $this->common->updateRecord('wti_banners', $add_in_m, $where);
                    $this->session->set_flashdata('success', 'Information updated successfully.');
                    
                   
                } else {
                   
                    $auto_id = $this->common->insertRecord('wti_banners', $add_in_m);
                    $this->session->set_flashdata('success', 'Information added successfully.');
                 
                }



                $this->common->createjson('wti_banners','banner','select * from  wti_banners c where     (delete_status=0 or delete_status IS NULL)  order by sort_no');

                redirect($this->controller . '/banner');
              
               
            } else {
               
                //$this->session->set_userdata('error', $error);
                $data['error_msg'] = $error;
            }



        }
		$data_info = array();
        if ($id != "") {
            $sql = "select * from wti_banners where   (delete_status=0 or delete_status IS NULL)    and  banner_id='" . $id . "'    ";
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                $data_info = $query->row_array();
                $data['records'] = $data_info;
            }
        } else {
            if (isset($add_in_m) && sizeof($add_in_m) > 0) {
                $data_info = (isset($_POST)) ? $_POST : '';
                $data['records'] = $data_info;
            } else {
    
                $sql = "select count('')  as numrows  from wti_banners        where     (delete_status=0 or delete_status IS NULL)   ";
                $query = $this->db->query($sql);
                $resultdata = $query->row_array();
                $data['records']['sort_no'] = $resultdata['numrows'] + 1;
            } 
        }

        $this->load->view('cms_banner_action', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');

    }   
    public function banner_action_delete($id=0)
    {
        
       
        $id = filter_var($id, FILTER_SANITIZE_STRING);

        $sql = "select  * from wti_banners ftm where banner_id='" . $id . "'  ";

        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $rowdata = $query->row_array();

            $sql = "delete from wti_banners where banner_id='" . $id . "'  ";
            $this->db->query($sql);
            $image_old_path_only = '../uploads/banner/';
              @unlink($image_old_path_only .   $rowdata['main_image']);
              $this->common->createjson('wti_banners','banner','select * from  wti_banners c where     (delete_status=0 or delete_status IS NULL)  order by sort_no');
            $this->session->set_flashdata('success', 'Deleted successfully.');
        } else {
            $this->session->set_flashdata('warning', 'You don\'t have persmission to delete this');
        }

        redirect($this->controller . '/banner');
    }
    
    public function faq()
    {

        $session_user_data = $this->session->userdata('admin_user_data');
        
        $data['l_s_act'] = 4;
        
        $data['title'] = 'FAQ';
        $data['sub_heading'] = 'FAq List';
        $data['controller'] = $this->ctrl_name;
        
        $error = '';
 
       
       $search_qry = " WHERE  1=1 ";

       $data['results'] = $this->common->getRecordsLimit('cms_faq', $search_qry, 0, 0);

 

        $this->load->view('cms_faq', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
    public function faqedit($id=0)
    {

        $session_user_data = $this->session->userdata('admin_user_data');
        $id = filter_var($id, FILTER_SANITIZE_STRING);
        $data['l_s_act'] = 3;
        
        $data['title'] = 'CMS ';
        $data['sub_heading'] = 'FAQ Edit';
        $data['controller'] = $this->ctrl_name;
        $data['id'] = $id;
        $error = '';
        $data['funcationname'] = "faqedit/".$id;
        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

            $add_in = array();
            $add_in['status'] = $status = (isset($_POST['status'])) ? $this->common->mysql_safe_string($_POST['status']) : 'Active';
            $add_in['sort_no'] = $sort_no = (isset($_POST['sort_no'])) ? $this->common->mysql_safe_string($_POST['sort_no']) : '';
            $add_in['question'] = $question = (isset($_POST['question'])) ? $this->common->mysql_safe_string($_POST['question']) : '';
            $add_in['question_en'] = $question_en = (isset($_POST['question_en'])) ? $this->common->mysql_safe_string($_POST['question_en']) : '';
            if ($question == '') {
                $error .= "Please enter question<br>";
            }
             
            $add_in['answer'] = $answer = (isset($_POST['answer'])) ? $_POST['answer']: '';
            $add_in['answer_en'] = $answer_en = (isset($_POST['answer_en'])) ? $_POST['answer_en'] : '';
            if ($answer == '') {
                $error .= "Please enter answer<br>";
            }
            
            if ($error == '') {

               
                $this->db->where('id', $id);
                $this->db->update('cms_faq', $add_in);

                $this->session->set_flashdata('success', 'Information updated succssfully!');
                redirect($this->ctrl_name . '/faq');
            } else {
                $this->session->set_flashdata('error', $error);
            }

            $data_info = $_POST;
        } else {

            $data_info = $this->common->getSingleInfoBy('cms_faq', 'id', $id, '*');
        }

        //print_r($data_info);
        if (sizeof($data_info) == 0) {
            $newdata = array('warning' => 'Please select data!');
            $this->session->set_flashdata($newdata);
            redirect($this->ctrl_name);
        }
        $data['records'] = $data_info;
        $this->load->view('cms_faqedit', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
    public function faqadd()
    {

        $session_user_data = $this->session->userdata('admin_user_data');
       
        $data['l_s_act'] = 4;
        
        $data['title'] = 'CMS ';
        $data['sub_heading'] = 'FAQ Add';
        $data['controller'] = $this->ctrl_name;
        $data['funcationname'] = "faqadd";
        $error = '';
        
        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

            $add_in = array();
            $add_in['status'] = $status = (isset($_POST['status'])) ? $this->common->mysql_safe_string($_POST['status']) : 'Active';
            $add_in['sort_no'] = $sort_no = (isset($_POST['sort_no'])) ? $this->common->mysql_safe_string($_POST['sort_no']) : '';
            $add_in['question'] = $question = (isset($_POST['question'])) ? $this->common->mysql_safe_string($_POST['question']) : '';
            $add_in['question_en'] = $question_en = (isset($_POST['question_en'])) ? $this->common->mysql_safe_string($_POST['question_en']) : '';
            if ($question == '') {
                $error .= "Please enter question<br>";
            }
             
            $add_in['answer'] = $answer = (isset($_POST['answer'])) ? $this->common->mysql_safe_string($_POST['answer']) : '';
            $add_in['answer_en'] = $answer_en = (isset($_POST['answer_en'])) ? $this->common->mysql_safe_string($_POST['answer_en']) : '';
            if ($answer == '') {
                $error .= "Please enter answer<br>";
            }
            $chkUserInfo = $this->common->getSingleInfoBy('cms_faq','question',$question);
            
             if (sizeof($chkUserInfo) > 0) {
                 $error = "$question  is already added";
             }
            if ($error == '') {

               
                $this->db->insert('cms_faq', $add_in);

                $this->session->set_flashdata('success', 'Information added succssfully!');
                redirect($this->ctrl_name . '/faq');
            } else {
                $this->session->set_flashdata('error', $error);
            }

            
        }  

        $data_info = (isset($_POST)) ? $_POST : '';
        $data['records'] = $data_info;
         
        $this->load->view('cms_faqedit', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
    
    public function privacy($id=2)
    {

        $session_user_data = $this->session->userdata('user_data');
        $id = isset($id)?filter_var($id, FILTER_SANITIZE_STRING):2;
        $data['activaation_id'] = 101;
        $data['sub_activaation_id'] = '101_3';
        
        $data['title'] = 'CMS ';
        $data['sub_heading'] = 'Privacy edit';
        $data['controller'] = $this->controller;
        $data['id'] = $id;
        $error = '';
        $data['fun_name'] = "privacy";
        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

            $add_in = array();

            $add_in['domains'] = $domains = (isset($_POST['domains'])) ? $this->common->mysql_safe_string($_POST['domains']) : '';
          
            $add_in['section'] = $section = (isset($_POST['section'])) ? $this->common->mysql_safe_string($_POST['section']) : '';
          
            $add_in['heading'] = $heading = (isset($_POST['heading'])) ? $this->common->mysql_safe_string($_POST['heading']) : '';
            $add_in['detail_mini'] = $detail_mini = (isset($_POST['detail_mini'])) ? $this->common->mysql_safe_string($_POST['detail_mini']) : '';
            $add_in['details'] = $details = (isset($_POST['details'])) ? $this->common->mysql_safe_string_descriptive($_POST['details']) : '';
          
              
            if ($details == '') {
                $error .= "Please enter details<br>";
            }
            
            if ($error == '' && $_FILES['main_image']['name'] != '') {

                //  $image_replace_name = $_FILES["main_image"]['name'];
                $filename = "privacy-" . $this->common->gen_key(4);

                $upload = $this->common->UploadImage('main_image', '../uploads/cms/', 0, $height_thumb = '', $width_thumb = '', $filename);

                if ($upload['uploaded'] == 'false') {
                    $error = $upload['uploadMsg'];
                } else {

                    $add_in['main_image'] = $upload['imageFile'];
                   
                }

            }

            if ($error == '') {
               
                $add_in['date_added'] = date("Y-m-d H:i:s");

                $sql = "select '' from wti_cms_pages where domains='{$domains}' and section='{$section}' "; 
                $query = $this->db->query($sql);
                if($query->num_rows()>0){
                    $this->db->where('domains', $domains);
                    $this->db->where('section', $section);
                    $this->db->update('wti_cms_pages', $add_in);
                } else {
                    $this->db->insert('wti_cms_pages', $add_in);
                   
                }

             //   $this->common->createjson('privacy','cms',"select * from  wti_cms_pages c      where     id=2 ",'single');

            


                $this->session->set_flashdata('success', 'Information updated succssfully!');
                redirect($this->controller . '/privacy');
            } else {
                $this->session->set_flashdata('error', $error);
            }

            $data_info = $_POST;
        } else {

            $data_info = $this->common->getRecordsLimit('wti_cms_pages', " where section='privacy' ", 0, 0);
            $data_info_temp = [];
            foreach($data_info as $key => $dataAddress){
                $data_info_temp[$dataAddress['domains']] = $dataAddress;

            }
            $data_info = $data_info_temp;
        }

        //print_r($data_info);
        if (sizeof($data_info) == 0) {
            $newdata = array('warning' => 'Please select data!');
            $this->session->set_flashdata($newdata);
            redirect($this->controller);
        }
        $data['records'] = $data_info;
        $data['records']['section'] = "privacy";
        //section
        $this->load->view('cms_aboutus', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    } 
    public function termscondtion($id=3)
    {

        $session_user_data = $this->session->userdata('user_data');
        $id = isset($id)?filter_var($id, FILTER_SANITIZE_STRING):3;
        $data['activaation_id'] = 101;
        $data['sub_activaation_id'] = '101_2';
        
        $data['title'] = 'CMS ';
        $data['sub_heading'] = 'Terms & condtion edit';
        $data['controller'] = $this->controller;
        $data['id'] = $id;
        $error = '';
        $data['fun_name'] = "termscondtion";
        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

            $add_in = array();
            $add_in['domains'] = $domains = (isset($_POST['domains'])) ? $this->common->mysql_safe_string($_POST['domains']) : '';
            $add_in['section'] = $section = (isset($_POST['section'])) ? $this->common->mysql_safe_string($_POST['section']) : '';
          
            $add_in['heading'] = $heading = (isset($_POST['heading'])) ? $this->common->mysql_safe_string($_POST['heading']) : '';
            $add_in['detail_mini'] = $detail_mini = (isset($_POST['detail_mini'])) ? $this->common->mysql_safe_string($_POST['detail_mini']) : '';
            $add_in['details'] = $details = (isset($_POST['details'])) ? $this->common->mysql_safe_string_descriptive($_POST['details']) : '';
          
              
            if ($details == '') {
                $error .= "Please enter details<br>";
            }
            
            if ($error == '' && $_FILES['main_image']['name'] != '') {

                //  $image_replace_name = $_FILES["main_image"]['name'];
                $filename = "about-us-" . $this->common->gen_key(4);

                $upload = $this->common->UploadImage('main_image', '../uploads/cms/', 0, $height_thumb = '', $width_thumb = '', $filename);

                if ($upload['uploaded'] == 'false') {
                    $error = $upload['uploadMsg'];
                } else {

                    $add_in['main_image'] = $upload['imageFile'];
                   
                   
                }

            }

            if ($error == '') {
                $add_in['date_added'] = date("Y-m-d H:i:s");

                $sql = "select '' from wti_cms_pages where domains='{$domains}' and section='{$section}' "; 
                $query = $this->db->query($sql);
                if($query->num_rows()>0){
                    $this->db->where('domains', $domains);
                    $this->db->where('section', $section);
                    $this->db->update('wti_cms_pages', $add_in);
  
                }    else {
                    $this->db->insert('wti_cms_pages', $add_in);
                   
                }
                
              //  $this->common->createjson('termscondtion','cms',"select * from  wti_cms_pages c      where     id=3 ",'single');



               $this->session->set_flashdata('success', 'Information updated succssfully!');
               redirect($this->controller . '/termscondtion');
            } else {
                $this->session->set_flashdata('error', $error);
            }

            $data_info = $_POST;
        } else {

            $data_info = $this->common->getRecordsLimit('wti_cms_pages', " where section='termscondtion' ", 0, 0);
            $data_info_temp = [];
            foreach($data_info as $key => $dataAddress){
                $data_info_temp[$dataAddress['domains']] = $dataAddress;

            }
            $data_info = $data_info_temp;
        }

        //print_r($data_info);
        if (sizeof($data_info) == 0) {
            $newdata = array('warning' => 'Please select data!');
            $this->session->set_flashdata($newdata);
            redirect($this->controller);
        }
        $data['records'] = $data_info;
        $data['records']['section'] = "termscondtion";
        $this->load->view('cms_aboutus', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    } 
    

    public function aboutus($id=1)
    {

        $session_user_data = $this->session->userdata('user_data');
        $id = isset($id)?filter_var($id, FILTER_SANITIZE_STRING):1;
        $data['activaation_id'] = 101;
        $data['sub_activaation_id'] = '101_1';
        
        $data['title'] = 'CMS ';
        $data['sub_heading'] = 'About-Us edit';
        $data['controller'] = $this->controller;
        $data['id'] = $id;
        $error = '';
        $data['fun_name'] = "aboutus";
        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

            $add_in = array();
            $add_in['section'] = $section = (isset($_POST['section'])) ? $this->common->mysql_safe_string($_POST['section']) : '';
          
            $add_in['heading'] = $heading = (isset($_POST['heading'])) ? $this->common->mysql_safe_string($_POST['heading']) : '';
            $add_in['detail_mini'] = $detail_mini = (isset($_POST['detail_mini'])) ? $this->common->mysql_safe_string($_POST['detail_mini']) : '';
            $add_in['details'] = $details = (isset($_POST['details'])) ? $this->common->mysql_safe_string_descriptive($_POST['details']) : '';
            $add_in['box1'] = $box1 = (isset($_POST['box1'])) ? $this->common->mysql_safe_string($_POST['box1']) : '';
            $add_in['box2'] = $box2 = (isset($_POST['box2'])) ? $this->common->mysql_safe_string($_POST['box2']) : '';
            $add_in['box3'] = $box3 = (isset($_POST['box3'])) ? $this->common->mysql_safe_string($_POST['box3']) : '';

              
            if ($details == '') {
                $error .= "Please enter details<br>";
            }
            
            if ($error == '' && $_FILES['main_image']['name'] != '') {

                //  $image_replace_name = $_FILES["main_image"]['name'];
                $filename = "about-us-" . $this->common->gen_key(4);

                $upload = $this->common->UploadImage('main_image', '../uploads/cms/', 0, $height_thumb = '', $width_thumb = '', $filename);

                if ($upload['uploaded'] == 'false') {
                    $error = $upload['uploadMsg'];
                } else {

                    $add_in['main_image'] = $upload['imageFile'];
            //        $this->load->library('Kishoreimagelib');
              //      $image_old_path_only = '../uploads/cms/';
                //    $this->kishoreimagelib->load('../uploads/cms/' . $add_in['main_image'])->set_background_colour("#fff")->resize(238, 374, true)->save($image_old_path_only . "238". $add_in['main_image']);

                 //   @unlink($image_old_path_only .   $add_in['main_image']);
                 //   rename($image_old_path_only .  "238". $add_in['main_image'],$image_old_path_only .   $add_in['main_image']);

                }

            }

            if ($error == '') {
               
                $this->db->where('id', $id);
                $this->db->update('wti_cms_pages', $add_in);
            //    $this->common->createjson('aboutus','cms',"select * from  wti_cms_pages c      where     id=1 ",'single');

                $this->session->set_flashdata('success', 'Information updated succssfully!');
                redirect($this->controller . '/aboutus');
            } else {
                $this->session->set_flashdata('error', $error);
            }

            $data_info = $_POST;
        } else {

            $data_info = $this->common->getSingleInfoBy('wti_cms_pages', 'id', $id, '*');
        }

        //print_r($data_info);
        if (sizeof($data_info) == 0) {
            $newdata = array('warning' => 'Please select data!');
            $this->session->set_flashdata($newdata);
            redirect($this->controller);
        }
        $data['records'] = $data_info;
        $data['records']['section'] = "aboutus";
        $this->load->view('cms_aboutus', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    } 
    
    
    
    public function address($id=1)
    {

        $session_user_data = $this->session->userdata('user_data');
        $id = filter_var($id, FILTER_SANITIZE_STRING);
        $data['activaation_id'] = 101;
        $data['sub_activaation_id'] = '101_4';
        
        $data['title'] = 'CMS ';
        $data['sub_heading'] = 'Address Edit';
        $data['controller'] = $this->controller;
        $data['id'] = $id;
        $error = '';
        $data['fun_name'] = "address";
        if (isset($_POST['mode']) && $_POST['mode'] == "submitform") {

            $add_in = array();
          
            $add_in['domains'] = $domains = (isset($_POST['domains'])) ? $this->common->mysql_safe_string($_POST['domains']) : '0';

           $add_in['address'] = $address = (isset($_POST['address'])) ? $this->common->mysql_safe_string($_POST['address']) : '';
           $add_in['address2'] = $address2 = (isset($_POST['address2'])) ? $this->common->mysql_safe_string($_POST['address2']) : '';
           $add_in['email1'] = $email1 = (isset($_POST['email1'])) ? $this->common->mysql_safe_string($_POST['email1']) : '';
           $add_in['email2'] = $email2 = (isset($_POST['email2'])) ? $this->common->mysql_safe_string($_POST['email2']) : '';
           $add_in['phone1'] = $phone1 = (isset($_POST['phone1'])) ? $this->common->mysql_safe_string($_POST['phone1']) : '';
           $add_in['phone2'] = $phone2 = (isset($_POST['phone2'])) ? $this->common->mysql_safe_string($_POST['phone2']) : '';
           $add_in['status_flag'] = $status_flag = (isset($_POST['status_flag'])) ? $this->common->mysql_safe_string($_POST['status_flag']) : '0';
           $add_in['google_map'] = $google_map = (isset($_POST['google_map'])) ? $this->common->mysql_safe_string_descriptive($_POST['google_map']) : '';
           $add_in['map_long'] = $map_long = (isset($_POST['map_long'])) ? $this->common->mysql_safe_string_descriptive($_POST['map_long']) : '';
           $add_in['map_lat'] = $map_lat = (isset($_POST['map_lat'])) ? $this->common->mysql_safe_string_descriptive($_POST['map_lat']) : '';
            
           
            if ($error == '') {
                $this->db->where('domains', $domains);
                $this->db->update('wti_m_address', $add_in);

                 
             //   $this->common->createjson('wti_m_address','',"select * from  wti_m_address c      where  domains='{$domains}'     ",'single');

                $this->session->set_flashdata('success', 'Information updated succssfully!');
                redirect($this->controller . '/address');
            } else {
                $this->session->set_flashdata('error', $error);
            }

            $data_info = $_POST;
        } else {

            $data_info = $this->common->getRecordsLimit('wti_m_address', '', 0, 0);
            $data_info_temp = [];
            foreach($data_info as $key => $dataAddress){
                $data_info_temp[$dataAddress['domains']] = $dataAddress;

            }
            $data_info = $data_info_temp;
        }

        //print_r($data_info);
        // if (sizeof($data_info) == 0) {
        //     $newdata = array('warning' => 'Please select data!');
        //     $this->session->set_flashdata($newdata);
        //     redirect($this->controller);
        // }
        $data['records'] = $data_info;
        $this->load->view('cms_address_tabs', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }   
    
    public function metatags()
    {
        
        $session_user_data = $this->session->userdata('user_data');

        $data['activaation_id'] = 101;
        $data['sub_activaation_id'] = '101_5';
        
        $data['title'] = $this->title;
        
        $data['maxm'] = $maxm = 50;
        $data['sub_heading'] = 'Metatags List';
        $fun_name = '';
        $data['fun_name'] = $fun_name;
        $data['controller'] = $this->controller;

        $resultdata = array();
        $sql = "select * from  wti_meta_tags c order by id";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $resultdata = $query->result_array();
        }
        $data['results'] = $resultdata;

        //     $sql = "select count('')  as numrows  from testimonial c      where cate_type='blog'  and delete_status=0 ";
        //    $query = $this->db->query($sql);
        //     $resultdata = $query->row_array();

        //$data['num_row'] = $resultdata['numrows'] ;//= $this->common->numRow($this->tablename,$where_cond);
        //$this->common->createjson('wti_meta_tags','',"select * from  wti_meta_tags c order by id ");

        $this->load->view('mtetatags_list', $data);
        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');
    }
   
    public function editdata($id = 0)
    {

        $session_user_data = $this->session->userdata('user_data');
        $id = filter_var($id, FILTER_SANITIZE_STRING);

        $data['activaation_id'] = 101;
        $data['sub_activaation_id'] = '101_5';
        
        $data['title'] = 'Metatags';
        $data['sub_heading'] = 'Edit';
        $data['id'] = $id;
        $data['fun_name'] = "editdata/" . $id;
        $data['controller'] = $this->controller;
        $data_info = array();
        $error = '';
        if (isset($_POST['mode']) && $_POST['mode'] == "edit_content") {

      
            $add_in['meta_keywords'] = $meta_keywords = (isset($_POST['meta_keywords'])) ? $this->common->mysql_safe_string($_POST['meta_keywords']) : '';
            $add_in['meta_title'] = $meta_title = (isset($_POST['meta_title'])) ? $this->common->mysql_safe_string($_POST['meta_title']) : '';
            $add_in['meta_descriptions'] = $meta_descriptions = (isset($_POST['meta_descriptions'])) ? $this->common->mysql_safe_string($_POST['meta_descriptions']) : '';
           
            $where = "id = '" . $id . "'";
            $update_status = $this->common->updateRecord('wti_meta_tags', $add_in, $where);
            $this->session->set_flashdata('success', 'Information updated successfully.');
            redirect($this->controller . '/metatags');

        }

        $data_info = array();
        if ($id != "") {
            $sql = "select  * from wti_meta_tags ftm where id='" . $id . "'  ";
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                $data_info = $query->row_array();
                $data['records'] = $data_info;
               
            }
        }

        if (sizeof($data_info) == 0) {
            $newdata = array('warning' => 'Please select page ');
            $this->session->set_flashdata($newdata);
            redirect($this->controller . "/metatags");
        }

        $this->load->view('mtetatags_adddata', $data);

        $this->session->unset_userdata('success');
        $this->session->unset_userdata('warning');
        $this->session->unset_userdata('error');

    }
}
