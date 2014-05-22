<?php
/**
* Created by PhpStorm.
* User: sadjad
* Date: 5/21/14
* Time: 4:46 PM
*
* Description: This code allows you to check the whois of a domain
*/

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mainsite_registration_step1 extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     */
    public function index()
    {
        $this->load->library('javascript');
        $this->load->view('mainsite_registration_step1');
    }
}