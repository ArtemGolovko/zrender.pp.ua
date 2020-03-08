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
		$this->view->generate($data, 'template_view.php', null, "Admin Console");
    }
    function action_post()
    {
        include  "https://".$_SERVER['HTTP_HOST']."/app/models/model_post.php";
        $this->model = new Model_Post();
        $data = $this->model->get_data();		
		$this->view->generate($data, 'template_view.php', null, "Add Post");
    }
}