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
									'rules' => 'required|max_length[50]|trim|htmlspecialchars' //задаем правила валидации для имени
									),

								array(
									'field' => 'number',
									'label' => 'Номер',
									'rules' => 'required|exact_length[12]|numeric|integer|trim|htmlspecialchars' // задаем правилв валидации для номера (ровно 12 символов)
									),

								array(
									'field' => 'userinfo',
									'label' => 'Описание',
									'rules' => 'required|max_length[255]|trim|htmlspecialchars' // задаем правила валидации для описания
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
				$this->db->insert('contacts',$data); // вставляем
		}



	function InsertDbId ($id) // вставка в базу по id

		{
				$this->db->where('id='.$id); // выбираем по id
				$query=$this->db->get('contacts'); // вставляем  полученную выборку
				return $query->row_array();

		}


	function UpdateDb ($id,$data) // обновление записи по id
		{
				$this->db->where('id='.$id); //выбираем по id
				$query=$this->db->update('contacts',$data); // обновляем  выборку по id
			 
		}


	function DeleteDb($id) // удаление из базы
		{
				$this->db->where('id',$id); //выбираем рядок по id
				$this->db->delete('contacts'); // удаляем рядок по id

		}

}

?>