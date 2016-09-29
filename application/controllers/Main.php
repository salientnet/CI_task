<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

   function __construct()
   {
      parent::__construct();
      $this->load->database();
      $this->load->helper('url');
      $this->load->library('grocery_CRUD');
   }

   public function index()
   {
      echo "<h1>Welcome to the world of Codeigniter</h1>";
   }

   public function employees()
   {
      $this->grocery_crud->set_table('employees');
      $this->grocery_crud->set_theme('datatables');
      $this->grocery_crud->set_subject('employee');
      $this->grocery_crud->field_type('price', 'integer');
      $output = $this->grocery_crud->render();
      $this->load->view('template.php',$output);
   }
}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */
