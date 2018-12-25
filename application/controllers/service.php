<?php
    class Service extends CI_Controller{

        public function index(){
            echo "E sasssssssssss";
            exit;
        }

        public function login(){
            echo "Fuckkkk";
            //echo "<br><br>";

            
            
        //$usr = $_POST['usr'];
        //$pw = $_POST['pw'];

        //$data['title'] = "Sample";
        //$this->load->view('main', $data);

        //echo "Username: " . $usr;
        //echo "<br>";
        //echo "Password: " . $pw;

        if ($this->db->query('select * from members'))
{
        echo "Success!";
}

        }
    }
?>