<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//
class Index extends CI_Controller{
    public function __construct()
        {
        parent::__construct();
        }
    
    function index(){
        
       //echo 'helo';exit;
        $this->load->view('index');
        //exit;
    }
}

