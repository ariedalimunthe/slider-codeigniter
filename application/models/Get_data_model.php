<?php
class Get_data_model extends CI_Model
{

	function get_all_slider()
	{
		$get_data = $this->db->query("SELECT tb_slider.*  FROM tb_slider ORDER BY slider_id DESC");
		return $get_data;
	}

	function get_slider_home()
	{
		$get_data = $this->db->query("SELECT tb_slider.*  FROM tb_slider ORDER BY slider_id ASC limit 3");
		return $get_data;
	}
}
