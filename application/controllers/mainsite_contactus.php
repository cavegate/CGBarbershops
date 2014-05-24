<?php
/**
 * Created by PhpStorm.
 * User: AramJ
 * Date: 5/22/14
 * Time: 2:41 PM
 *
 * Description: with this page costumer can contact with the manager of site.
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mainsite_contactus extends CI_Controller {

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
        $this->load->view('mainsite_contactus');
    }
}


