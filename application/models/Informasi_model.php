<?php

class Informasi_model extends CI_Model
{

	private $_table = 'informasi';


	public function delete($kd_info)
	{
		if (!$kd_info) {
			return;
		}

		return $this->db->delete($this->_table, ['kd_info' => $kd_info]);
	}

	
}