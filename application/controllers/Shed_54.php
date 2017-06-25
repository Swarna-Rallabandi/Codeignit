<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';
// use namespace
use Restserver\Libraries\REST_Controller;
/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */

class Shed_54 extends REST_Controller{
      function __construct($config = 'rest'){
            parent::__construct($config);
   $this->load->database(); // load database
   $this->load->model('Chook_model'); // load model
}
    
    
    public function index_get() {
        
       {
        $this->load->helper('url');

        $this->load->view('shed_54/index_54');
    }
}
 
 
    }


     

   
       