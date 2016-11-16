<?php

class Start_Models extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
	}
 

 // function CreateDb () // создание базы

 // 	{
	// //  	$ct3='create table Users (
	// // 	id int not null auto_increment primary key,
	// // 	username varchar(30), 
	// // 	pass varchar(255) not null,
	// // 	email varchar(100), roleid int, 
	// // 	foreign key(roleid) references Roles(id) on delete cascade on update cascade)
	// // 	default charset="utf8"';
	// // 	tools::createtable($ct3);
	// }


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


	function UpdateDb ($id) // обновление записи 
	{
		$this->db->where('id='.$id);
		$query=$this->db->get('contacts');
		return $query->row_array();
		 
	}


	function DeleteDb() // удаление из базы
	{

		$this->db->where(array('sizeimage <' => $size));
		$query = $this->db->get('picturies');
		return $query->result_array();

	}
		

}


?>