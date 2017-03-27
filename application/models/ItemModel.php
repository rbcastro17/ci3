<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Model {

	public function getItems()
	{
		$item = $this->db->get('items');
        return $item->result();
    }
    public function getItem($id){
        $item = $this->db->get_where('items', array('id' => $id));

        return $item->row();
    }

    public function addItem($item){ //data type array
        $this->db->insert('items', $item);
    }

    public function deleteItem($id){
        $this->db->delete('items', array('id'=>$id));
    }

    public function updateItem($id, $array){
        $this->db->set($array)
        ->where(array('id'=>$id))
        ->update('items');
    }


}
