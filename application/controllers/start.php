<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('start_models'); // загрузили модель
		
	}
	
	public function index() // метод для стартовой страницы
	{ 
		
	$query['table']=$this->start_models->SelectDb();	
	$this->load->helper('url'); 
	$u=site_url("InsertData");										
	$this->load->view('start_view', $query, $u); 
	

	}

	function InsertData() // вставка данных в базу
	{

		if (isset($_POST['add'])) // дописать еще пост полей или сделать так, что бы не было ложных срабатываний пост
		{
			$data=array(
				'name'=>$_POST['username'],
				'number'=>$_POST['number'],
				'info'=>$_POST['userinfo']	
			); 	
										 
		$this->start_models->InsertDb($data);
		$this->load->view('good_view'); // вьшка добавления записи



		}
		elseif (isset($_POST['revers'])) 
		{
			$this->index();
		}
		
			$this->load->view('add_view');
		
	}
	

	function UpdateData() // обновление данных в базе

	{
			
 			if (isset($_POST['save'])) // дописать еще пост полей или сделать так, что бы не было ложных срабатываний пост
		{
			$id=$_POST['id'];

			$data=array(
				'name'=>$_POST['username'],
				'number'=>$_POST['number'],
				'info'=>$_POST['userinfo']	
			); 	
										 
		$this->start_models->UpdateDb($id,$data);
		$this->load->view('good_view'); // вьшка добавления записи	

		}
$this->load->view('start_view');

	}



	function InsertDataId()   // выборка данных данных из базы по id
	{

		$id=$_GET['id']; 	

		$query['row']=$this->start_models->InsertDbId($id);
		$this->load->view('update_view',$query); // вьшка добавления записи		
	}
}
