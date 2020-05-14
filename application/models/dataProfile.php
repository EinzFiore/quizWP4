<?php
class dataProfile extends CI_Model
{
    function tambahData($data,$table){
        $this->db->insert($table,$data);
    }

    function uploadFoto(){
        
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '1024';
        $config['overwrite'] = 'TRUE';
        
        $this->load->library('upload', $config);
        $this->upload->do_upload('foto');
        $data_foto = $this->upload->data('file_name');
    }
}


/* End of file filename.php */
