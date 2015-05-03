<?php
class User_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }


    function gets(){
        return $this->db->query("SELECT * FROM user")->result();
    }

    function add($option)
    {
        $this->db->set('email', $option['email']);
        $this->db->set('nickname', $option['nickname']);
        $this->db->set('password', $option['password']);
        $this->db->set('created', 'NOW()', false);
        $this->db->insert('user');
        $result = $this->db->insert_id();
        $this->db->set('nickname', $option['nickname']);
        $this->db->set('created', 'NOW()', false);
        $this->db->insert('economy');
        $result = $this->db->insert_id();
        $this->db->set('nickname', $option['nickname']);
        $this->db->set('created', 'NOW()', false);
        $this->db->insert('management');
        $result = $this->db->insert_id();
        $this->db->set('nickname', $option['nickname']);
        $this->db->set('created', 'NOW()', false);
        $this->db->insert('comlaw');
        $result = $this->db->insert_id();
        $this->db->set('nickname', $option['nickname']);
        $this->db->set('created', 'NOW()', false);
        $this->db->insert('taxlaw');
        $result = $this->db->insert_id();
        $this->db->set('nickname', $option['nickname']);
        $this->db->set('created', 'NOW()', false);
        $this->db->insert('accounting');
        $result = $this->db->insert_id();
        $this->db->set('nickname', $option['nickname']);
        $this->db->set('created', 'NOW()', false);
        $this->db->insert('english');
        $result = $this->db->insert_id();


        return $result;
    }

    function getByEmail($option)
    {
        $result = $this->db->get_where('user', array('email'=>$option['email']))->row();
        return $result;
    }

}
