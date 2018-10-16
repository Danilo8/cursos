<?php

namespace app\Controllers;

use app\Models\Admin;

class AdminController {

    private $model;

    public function __construct(Type $var = null)
    {
        $this->model = new Admin();
        
        if (isset($_POST)) {
            if ($_POST['action'] == "logar") {
                $this->logar();
            }
        }
    }

    public function logar()
    {
        $auth = $this->model->Auth($_POST['email'], $_POST['password']);

        if ($auth) {
            $row = $auth->fetch_assoc();
            $_SESSION['admin'] = $row['id'];
            $this->redirect('http://'.DOMINIO.'/admin/dashboard');
        } else {
            
        }        
    }

    public function redirect($to)
    {
        header('Location: ' . $to);
    }
}