<?php 
	/**
	 * 
	 */
	class Hello extends CI_Controller
   {  
      public function index() 
	  { 
         echo "Hello World"; 
      } 
      public function name() 
	  { 
         echo "mike"; 
      } 
      public function user() 
	  { 
         echo "mikewh"; 
      } 
      public function about() 
   	  { 
         $this->load->view('about'); 
      }
   
   
   } 
 ?>