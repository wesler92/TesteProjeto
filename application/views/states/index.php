<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href=" <?= base_url("css/estados.css") ?> ">
</head>

<body>
    <div class="container">
        <?php if($this->session->flashdata("success")) : ?>
            <p><?= $this->session->flashdata("success") ?></p>
        <?php endif ?>
        <?php if($this->session->flashdata("danger")) : ?>
            <p><?= $this->session->flashdata("danger") ?></p>
        <?php endif ?>
        <?php if($this->session->userdata("usuario logado")): ?>
       
        <div class="states">
        <table class="table">
        <h1>Estados do Brasil</h1>
            <tr>
                <th>Nome</th>
            </tr>
            <?php
            shuffle($states);
            foreach ($states as $state) : ?>
                <tr>
                    <td><?= $state['name'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
        <?= anchor("login/logout","Sair",array("class" => "btn btn-logout")) ?>
    </div>
    </div>
            <?php else: ?>
    <div class="form">
        <h1>Login</h1>
        <?php
        echo form_open("login/authenticate");
        echo form_label("Nome", "name");
        echo form_input(array(
            "name" => "name",
            "id" => "name",
            "class" => "form-control",
            "maxlength" => "255"
        ));
        echo form_open("users/new");
        echo form_label("Senha", "password");
        echo form_password(array(
            "name" => "password",
            "id" => "password",
            "class" => "form-control",
            "maxlength" => "255"
        ));
        echo form_button(array(
            "class" => "btn-form",
            "type" => "submit",
            "content" => "Login"
        ));
        echo form_close()
        ?>
   
        <h1>Cadastro</h1>
        <?php
        echo form_open("users/new");
        echo form_label("Nome", "name");
        echo form_input(array(
            "name" => "name",
            "id" => "name",
            "class" => "form-control",
            "maxlength" => "255"
        ));
        echo form_open("users/new");
        echo form_label("Senha", "password");
        echo form_password(array(
            "name" => "password",
            "id" => "password",
            "class" => "form-control",
            "maxlength" => "255"
        ));
        echo form_button(array(
            "class" => "btn-form",
            "type" => "submit",
            "content" => "Cadastrar"
        ));
        echo form_close()
        ?>
        <?php endif ?>
    </div>

</body>

</html>