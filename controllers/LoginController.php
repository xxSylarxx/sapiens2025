<?php

class Login extends Controller
{

    private $model;

    public function __construct()
    {
        $this->model = new LoginModel();
        $this->nameView = strtolower(get_class($this));
    }

    public function index()
    {   
	parent::renderView($this->nameView);
    }

    public function auth()
    {
        if (!empty($_POST)) {
            $name = Funciones::limpString(parent::getPost('name'));
            $pass = Funciones::limpString(parent::getPost('pass'));
            $resp = $this->model->validarLogueo($name, $pass);
            if ($resp == 'OK') {
                session_start();
                $_SESSION['auth-name'] = $name;
                echo 'OK';
            } else {
                die($resp);
            }
        } else {
            die('No se pudo procesar la solicitud');
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: ' . WEBURL . '/admin/login');
    }
}
