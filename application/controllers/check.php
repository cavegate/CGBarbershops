<?php
/**
 * Created by PhpStorm.
 * User: cavegate
 * Date: 5/22/14
 * Time: 7:39 PM
 *
 * Description: this controller will che the domain
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Check extends CI_Controller {

    /**
     * @return string yes or no
     */
    public function index()
    {
        die;
        $domain = $_REQUEST['domain'];
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
