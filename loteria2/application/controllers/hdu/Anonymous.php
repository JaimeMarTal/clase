<?php

class Anonymous extends CI_Controller
{

    public function registrar()
    {
        frame($this, '_hdu/anonymous/registrar');
    }

    public function registrarPost()
    {
        $this->load->model('persona_model');

        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $pwd = isset($_POST['pwd']) ? $_POST['pwd'] : null;

        try {
            $this->persona_model->registrarPersona($nombre, $pwd);
            session_start();
            $_SESSION['_msg']['texto'] = "Usuario registrado con éxito";
            $_SESSION['_msg']['uri'] = '';
            redirect(base_url() . 'msg');
        } catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto'] = $e->getMessage();
            $_SESSION['_msg']['uri'] = 'persona/c';
            redirect(base_url() . 'msg');
        }
    }

    public function login()
    {
        frame($this, '_hdu/anonymous/login');
    }

    public function loginPost()
    {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $pwd = isset($_POST['pwd']) ? $_POST['pwd'] : null;
        $this->load->model('persona_model');
        try {
            $persona = $this->persona_model->verificarLogin($nombre, $pwd);
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION['persona'] = $persona;
            redirect(base_url());
        } catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto'] = $e->getMessage();
            $_SESSION['_msg']['uri'] = '';
            redirect(base_url() . 'msg');
        }
    }
    
}

?>