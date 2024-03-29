<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 use Restserver\Libraries\REST_Controller;
require(APPPATH.'/libraries/REST_Controller.php');
class Api_54 extends REST_Controller
{
 
       public function __construct() {
               parent::__construct();
               $this->load->model('Chook_model');
 
       } 
    
    
       public function antenna_report_get(){
           
           
           
$date = $this->input->get('date');
if ($date != "") {
$result = $this->Chook_model->show_antenna_data_by_date_54($date);

if ($result != false) {
$data['result_display'] = $result;
} else {
$data['result_display'] = "No record found !";
}
} else {
    $data['date_error_message'] = "Date field is required";
}    
        
          
           
           $this->response($data); 
       }
    
       public function antenna_report_post(){
           
           
           
$date = $this->input->post('date');
if ($date != "") {
$result = $this->Chook_model->show_antenna_data_by_date_54($date);

if ($result != false) {
$data['result_display'] = $result;
} else {
$data['result_display'] = "No record found !";
}
} else {
    $data['date_error_message'] = "Date field is required";
}    
        
          
           
           $this->response($data); 
       }
    public function reader_report_get(){
       $date = $this->input->get('date');
        
        
        
    //$result = $this->Chook_model->show_reader_data_by_date($date);
        
        if ($date != "") {
 $result = $this->Chook_model->show_reader_data_by_date_54($date);

if ($result != false) {
$data['result_display'] = $result;
} else {
$data['result_display'] = "No record found !";
}
} else {
    $data['date_error_message'] = "Date field is required";
}    
        
       
           $this->response($data); 
       }
    
    
     public function reader_report_post(){
       $date = $this->input->post('date'); 
         if ($date != "") {
 $result = $this->Chook_model->show_reader_data_by_date_54($date);

if ($result != false) {
$data['result_display'] = $result;
} else {
$data['result_display'] = "No record found !";
}
} else {
    $data['date_error_message'] = "Date field is required";
}    
        
       
           $this->response($data); 
       }
    
    public function epc_report_get() {
$result = $this->Chook_model->show_epc_data_54();
if ($result != false) {
$data['result_display'] = $result;
} else {
return 'Database is empty !';
}
//$data['show_table'] = $this->view_table();
//$this->load->view('shed_53/index', $data);
        $this->response($data); 
}
     
    public function epc_report_post() {
$result = $this->Chook_model->show_epc_data_54();
if ($result != false) {
$data['result_display'] = $result;
} else {
return 'Database is empty !';
}
//$data['show_table'] = $this->view_table();
        $this->response($data); 
//$this->load->view('shed_53/index', $data);
}
    
   // public function epc_get(){
          // $r = $this->Chook_model->show_epc_data();
          // $this->response($r); 
      // }
      /*
       public function user_post(){
           $data = array('antenna_name' => $this->input->post('antenna_name'),
           'reader_name' => $this->input->post('reader_name'),
           'epc' => $this->input->post('epc')
           );
           $r = $this->user_model->insert($data);
           $this->response($r); 
       }
       */
      
 
}
