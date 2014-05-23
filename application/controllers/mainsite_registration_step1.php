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
		$this->load->helper('url');
        $this->load->view('mainsite_registration_step1');
    }

    public function check_domain()
    {
        $domain = $_POST['domain'];
        $this->load->model("model_whois_checker");
        if($this->model_whois_checker->validateDomain($domain) != false)
        {
            $result = $this->model_whois_checker->lookupDomain($domain);
            $extention = $this->model_whois_checker->getExtention($domain);
            switch($extention)
            {
                case "ir":
                    if($result[0] == 'E')
                        echo "yes";
                    else
                        echo "no";
                    break;
                case "com":
                    if($result[0] == 'W')
                        echo "yes";
                    else
                        echo "no";
                    break;
                case "org":
                    if($result[0] == 'N')
                        echo "yes";
                    else
                        echo "no";
                    break;
            }
        }
        else
            echo "no";
    }
}