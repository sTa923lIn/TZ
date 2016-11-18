<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {

	function __construct()
			{
					parent::__construct();

					$this->load->model('start_models'); // загрузили модель
					$this->load->library('form_validation');// загрузили библиотеку валидации
			}
	
	public function index() // метод для стартовой страницы
			{ 
				
					$query['table']=$this->start_models->SelectDb();											
					$this->load->view('start_view', $query); 
			
			}

	function DataValid()
			{	
					if (isset($_POST['add'])) //при нажатии кнопки "Добавить"
						{
							$rul=$this->start_models->ValidDB(); // передаем данные в метод валидации

									if ($rul == TRUE) 
									{
											$this->InsertData(); // прошло валидацию и вставляем данные
									}
									else
									{
											$this->load->view('add_view'); // не прошли валидацию и остаемся в форме
									}

						}
						elseif(isset($_POST['revers'])) //при нажатии кнопки "Вернуться к списку"
						{

								$this->index(); // загружаем стартовую страницу

						}
						else
						{

								$this->load->view('add_view'); // если нет "add" и "revers" остаемся на странице добавления записи
						
						}

			}


	function InsertData() // вставка данных в базу
			{
						if (isset($_GET['id'])) // если существуем метод GET вытягиваем из него id редактируемого рядка
						{
								$id=$_GET['id'];
								$data=array(
									'name'=>$_POST['username'],
									'number'=>$_POST['number'],
									'info'=>$_POST['userinfo']	
							); 	
													 
							$this->start_models->UpdateDb($id,$data);	// передаем данные для обновления записи, согласно указанному айди 
						
						}
						else // если НЕ существуем метод GET собираем данные и передаем в модель для добавление записи в базу
						{

								$data=array(
									'name'=>$_POST['username'],
									'number'=>$_POST['number'],
									'info'=>$_POST['userinfo']	
								); 	
														 
							$this->start_models->InsertDb($data); // передача данных в модель для записи в базу
						
						}		

							$this->index();//загрузка стартовой страницы
			}
	

	function UpdateData() // обновление данных в базе

			{		

				if (isset($_POST['save'])) // если нажали кнопку "Сохранить"
						{
									$rul=$this->start_models->ValidDB(); // передаем данные в метод валидации

									if ($rul == TRUE) 
									{
											$this->InsertData(); // прошло валидацию и вставляем данные
									}
									else
									{
										$this->InsertDataId(); // повторяем выборку данных по id для вставки в форму udta_view
									}

						}
						elseif(isset($_POST['revers']))
						{

									$this->index(); // загружаем стартовую страницу
						}
						else
						{

									$this->load->view('update_view'); // если нет "add" и "revers" остаемся на странице редактирования записи
						}

			}

	function InsertDataId()   // вставка данных в базы по id
			{
					$id=$_GET['id']; 	
					$query['row']=$this->start_models->InsertDbId($id);
					$this->load->view('update_view',$query); // вьшка добавления записи		

			}


	function DeleteData()
			{
					$id=$_GET['id']; 	// вытягивыем ключ id
					$this->start_models->DeleteDB($id); // передаем айди и запускаем метод удаления записи из базы

			}


	}
