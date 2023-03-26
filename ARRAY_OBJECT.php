<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Check extends CI_Controller
{


    public function index()
    {   
        //type 1
        $this->db->where("variable",'web_settings');
        $q = $this->db->get('settings');
        echo "<pre>";
        print_r($q->result_array());
        $q2 = $q->result_array();
        echo "<pre>";
        print_r($q2[0]['value']);
        $q3 = $q2[0]['value'];
           //string to object not working
        //$myObject =json_decode($q3);
        echo "<pre>";
        print_r(var_dump($q3));
     



        //type 2
        // $query = $this->db->get_where('settings', array(
        //     'variable' => 'web_settings'
        // ));
        // $count = $query->result();
        // echo "<pre>";
        // print_r($count);
        // print_r($count[0]);
        //  print_r($count[0]->value);


      
    }

   

}
