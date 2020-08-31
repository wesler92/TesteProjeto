<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function authenticate()
	{
              $this->load->model("users_model");
              $name  = $this->input->post("name");
              $password = md5($this->input->post("password"));
              $user = $this->users_model->loginUsers($name,$password);
              if($user){
                $this->session->set_userdata("usuario logado", $user);
                $this->session->set_flashdata("success", "Logado com sucesso!");   
              }
              else{
                $this->session->set_flashdata("danger","Usuário ou senha inválidos!");
              }
              redirect('/');
  }
  public function Logout(){
    $this->session->unset_userdata("usuario logado");
    $this->session->set_flashdata("success","Deslogado com sucesso!");
    redirect('/');
  }
}
