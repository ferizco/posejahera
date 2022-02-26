<?php

class order_model extends CI_Model
{

	private $_table = 'order_tiket';


	public function delete($id_order)
	{
		if (!$id_order) {
			return;
		}

		return $this->db->delete($this->_table, ['id_order' => $id_order]);
	}

	
}