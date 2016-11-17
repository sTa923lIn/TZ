<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('start_models'); // загрузили модель
		$this->load->library('form_validation');
	}
	
	public function index() // метод для стартовой страницы
	{ 
		
	$query['table']=$this->start_models->SelectDb();											
	$this->load->view('start_view', $query); 
	

	}

function DataValid()
{	
	if (isset($_POST['add'])) //
		{
				$this->form_validation->set_rules($this->start_models->FormRules);
				$rul=$this->form_validation->run();

				if ($rul == TRUE) 
				{
						$this->InsertData();
				}
		}
		else
		{
			$this->load->view('add_view');
		}


}


	function InsertData() // вставка данных в базу
	{

			$data=array(
				'name'=>$_POST['username'],
				'number'=>$_POST['number'],
				'info'=>$_POST['userinfo']	
			); 	
										 
		$this->start_models->InsertDb($data);
		
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

		}

		$this->index();
	}



	function InsertDataId()   // выборка данных данных из базы по id
	{

		$id=$_GET['id']; 	

		$query['row']=$this->start_models->InsertDbId($id);
		$this->load->view('update_view',$query); // вьшка добавления записи		
	}
}
