<?php

class Start_Models extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
	}


function ValidDB()
{
	 $ruls=array(

				array(
					'field' => 'username',
					'label' => 'Имя',
					'rules' => 'required|max_length[50]|alpha|trim'
					),

				array(
					'field' => 'number',
					'label' => 'Номер',
					'rules' => 'required|exact_length[12]|numeric|integer|trim'
					),

				array(
					'field' => 'userinfo',
					'label' => 'Описание',
					'rules' => 'required|max_length[255]|trim'
					),
			);
				$this->form_validation->set_rules($ruls);
				$rul=$this->form_validation->run();
				return $rul;


}



	function SelectDb() // выборка из базы

	{	
		$this->db->order_by('id','DESC'); // сортируем по убыванию список 
		$query = $this->db->get('contacts'); // сделали выборку из таблицы 
		return $query->result_array(); // вернули результат в виде массива 
	}

	function InsertDb ($data) // вставка в базу

	{

		$this->db->insert('contacts',$data); 

	}


function InsertDbId ($id) // вставка в базу

	{
		$this->db->where('id='.$id);
		$query=$this->db->get('contacts');
		return $query->row_array();

	}


	function UpdateDb ($id,$data) // обновление записи 
	{
		$this->db->where('id='.$id);
		$query=$this->db->update('contacts',$data);
		 
	}


	function DeleteDb($id) // удаление из базы
	{
		$this->db->where('id',$id);
		$this->db->delete('contacts');

	}
		

}


?>