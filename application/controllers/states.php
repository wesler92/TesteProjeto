<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class states extends CI_Controller {

	public function index()
	{
        $this->load->model("states_model");
        $list = $this->states_model->searchStates();
        $data = array("states"=> $list);
        $this->load->view('states/index',$data);

	}
}
