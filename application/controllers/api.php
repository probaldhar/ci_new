<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
//To Solve File REST_Controller not found
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

use Restserver\Libraries\REST_Controller;

class Api extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function users_get() 
	{
		$users = [
            ['id' => 1, 'name' => 'John', 'email' => 'john@example.com', 'fact' => 'Loves coding'],
            ['id' => 2, 'name' => 'Jim', 'email' => 'jim@example.com', 'fact' => 'Developed on CodeIgniter']
        ];

	
		$this->response($users, REST_Controller::HTTP_OK);
	}

	public function users_post()
    {
    	$params = json_decode(file_get_contents('php://input'));

    	// print_r($params);
    
        $result = [
        	'status' => 'success',
        	'code' => REST_Controller::HTTP_CREATED,
        	'result' => ['id' => 3, 'name' => $params->name, 'email' => $params->title, 'fact' => 'Developed on PHP']
       	];

       	$result1 = [
        	// 'status' => 'success',
        	'title' => $params->title,
        	'slug' => $params->name,
        	'text' => 'same text added'
       	];

       	$this->load->model('News_model', 'NewsModel');

       	$this->NewsModel->add_users($result1);
       	
        $this->set_response($result, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
    }

    public function dummy() {

        $this->load->view('templates/header', []);
        $this->load->view('templates/dummy', []);
        $this->load->view('templates/footer', []);

        // $this->response(TRUE, REST_Controller::HTTP_OK);
    }

}



