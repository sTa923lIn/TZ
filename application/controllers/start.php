<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('start_models'); // загрузили модель 
	}
	
	public function index() // метод для стартовой страницы
	{ 
		$query['table']=$this->start_models->SelectDb(); // делаем выборку из базы phone_book		
		$this->load->view('start_view', $query); // передаем выборку стартовой странице
	}

	function Create_db() // создание базы данных
	{
		
	}
// ==============================================================================================
	// function InsertData() // вставка данных в базу
	// {

	// 	if (isset($_POST['add'])) // дописать еще пост полей или сделать так, что бы не было ложных срабатываний пост
	// 	{
	// 		$data=array(
	// 			'name'=>$_POST['username'],
	// 			'info'=>$_POST['userinfo'],
	// 			'number'=>$_POST['number']	
	// 		); 	
										 
	// 	$this->start_models->InsertDb($data);
	// 	$this->load->view('good_view'); // вьшка добавления записи	

	// 	}

	// 	$this->load->view('add_view');
	// }
// =============================================================================================
	

	function UpdateData() // обновление данных в базе

	{
			$id=$_POST['id'];
 echo $id;
		

	}

	function InsertDataId()   // выборка данных данных из базы по id
	{

		$id=$_GET['id']; 	

		$query['row']=$this->start_models->UpdateDb($id);
		$this->load->view('update_view',$query); // вьшка добавления записи		
	}
}
