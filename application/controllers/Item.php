<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

    public function __construct(){
        $this->load->model('ItemModel');
    }

	public function index()
	{
    //    echo "Item Controller";    
		$this->load->view('welcome_message');
	}
    public function addPage(){

    }

    public function add(){

        $this->ItemModel->addItem($_POST);

    }

    public function editPage(){

    }

    public function edit(){

    }

    public function deletepage(){

    }

    public function delete(){

    }


}
