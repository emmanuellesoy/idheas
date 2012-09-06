<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Casos_c extends CI_Controller {
 
      public function __construct(){
           
          parent::__construct();
          
          $this->load->model(array('casos_m'));
          
       }
       
       public function cAgregarCaso(){
           
           $expression = $this->casos_m->mAgregarCaso();
           
           print_r($expression);
           
       }
       
       
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/casos_c.php */