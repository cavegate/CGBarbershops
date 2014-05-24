<?php
/**
 * Created by PhpStorm.
 * User: Ali Motameni
 * Date: 5/21/14
 * Time: 4:57 PM
 */
class Photo_gallery extends CI_Controller{
    public function index($gallery_id=0)
    {
        if($gallery_id==0)
        {

        }
        else
        {
            $website_name='ali.com';//this should import from other function.
            $website_id_query=$this->db->query("SELECT website_id From websites where domain='".$website_name."'");
            $website_id=$website_id_query->row()->website_id;
            $website_id_checking=$this->db->query("SELECT website_id From gallery_categories where gallery_id='".$gallery_id."'");
            if($website_id==$website_id_checking)
            {

            }
            die();
            $this->db->query('SELECT FROM ');
            $map = directory_map('./uploads/',false,true);
            $this->load->view('photo_gallery',array('map'=>$map));
        }

    }
}