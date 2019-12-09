<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Skill_model extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get('skill')->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('skill', ["skill_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->skill_id = uniqid();
        $this->nama     = $post["nama"];
        $this->image     = $this->_uploadImage();
        $this->db->insert('skill', $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->skill_id = $post["id"];
        $this->nama     = $post["nama"];

        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
            echo "1";
        } else {
            $this->image = $post["old_image"];
            echo "2";
        }

        $this->db->update('skill', $this, array('skill_id' => $post['id']));
        
    }

    public function delete($id)
    {
        return $this->db->delete('skill', array("skill_id" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/img/skill/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->skill_id;
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }
}