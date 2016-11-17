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
				$rul=$this->start_models->ValidDB();

				if ($rul == TRUE) 
				{
						$this->InsertData();
				}
				else
				{
					$this->load->view('add_view');
				}
		}
		elseif(isset($_POST['revers']))
		{
			$this->index();
		}
		else
		{
			$this->load->view('add_view');
		}

}


	function InsertData() // вставка данных в базу
	{
			if (isset($_GET['id'])) 
			{
				$id=$_GET['id'];
				$data=array(
					'name'=>$_POST['username'],
					'number'=>$_POST['number'],
					'info'=>$_POST['userinfo']	
				); 	
										 
			$this->start_models->UpdateDb($id,$data);	
			}
			else
			{
				$data=array(
					'name'=>$_POST['username'],
					'number'=>$_POST['number'],
					'info'=>$_POST['userinfo']	
				); 	
											 
			$this->start_models->InsertDb($data);
			}		

			$this->index();
	}
	

	function UpdateData() // обновление данных в базе

	{		

if (isset($_POST['save'])) //
		{
				$rul=$this->start_models->ValidDB();

				if ($rul == TRUE) 
				{
						$this->InsertData();
				}
				else
				{
					$this->InsertDataId();
				}
		}
		elseif(isset($_POST['revers']))
		{
			$this->index();
		}
		else
		{
			$this->load->view('update_view');
		}


	}



	function InsertDataId()   // выборка данных данных из базы по id
	{
		$id=$_GET['id']; 	
		$query['row']=$this->start_models->InsertDbId($id);
		$this->load->view('update_view',$query); // вьшка добавления записи		

	}
}
