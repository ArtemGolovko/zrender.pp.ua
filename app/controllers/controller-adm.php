<?php
class Controller_Adm extends Controller
{

	function __construct()
	{
		$this->model = new Model_Adm();
		$this->view = new View();
	}
	
	function action_index()
	{
		$data = $this->model->get_data();		
		$this->view->generate('portfolio_view.php', $data, null, "Portfolio");
    }
    function action_post()
    {
        require "/app/models/model_post.php";
        this->model = new Model_Post();
        $data = $this->model->get_data();		
		$this->view->generate('portfolio_view.php', $data, null, "Portfolio");
    }
}