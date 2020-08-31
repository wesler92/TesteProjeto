<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

        public function new()
        {
                $this->load->library("form_validation");
                $this->form_validation->set_rules("name", "name", "required");
                $this->form_validation->set_rules("password", "password", "required");
                $success = $this->form_validation->run();
                if ($success) {
                        $user = array(
                                "name" => $this->input->post("name"),
                                "password" => md5($this->input->post("password"))
                        );
                        $this->load->model("users_model");
                        $this->users_model->Save($user);
                        $this->session->set_flashdata("success", "Cadastrado com Sucesso");
                        redirect('/');
                } else {
                        $this->session->set_flashdata("danger", "Preencha os campos");
                        redirect('/');
                       
                }
        }
}
