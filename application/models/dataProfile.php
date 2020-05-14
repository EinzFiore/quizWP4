<?php
class dataProfile extends CI_Model
{
    function tambahData($data,$table){
        $this->db->insert($table,$data);
    }
}


/* End of file filename.php */
