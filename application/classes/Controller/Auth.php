<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Template {
    public $template = 'template';
    public $session = null;

    public function before() {
        if($this->request->action()!='logout')
            if(Model_Users::isLogin()) $this->redirect('/') and die();
        parent::before();
    }
    public function action_logout() {
        Model_Users::logout();
        $this->redirect('/') and die;
    }

    public function action_index()
    {
        $this->template->content = View::factory('pages/auth');
    }

    public function action_registration() {
        $errors = [];
        if($this->request->method()=='POST') {
            if($this->request->post('password')!==$this->request->post('re-password'))
                $errors[]='Введенный повторно пароль не совпадает.';
        }
        if(empty($errors) && $this->request->method()=='POST') {
            $user = new Model_Users();
            $user->login = $this->request->post('login');
            $user->password = md5($this->request->post('password'));
            $user->email = $this->request->post('email');
            $user->name = $this->request->post('name');

            if($user->save()) $this->redirect('/');
        }
        $this->template->content = View::factory('pages/registration', ['errors'=>$errors]);
    }

    public function action_auth() {
        $this->session = Session::instance();
        $user = new Model_Users();
        $user = $user->authorization($this->request->post('login'), $this->request->post('password'));
        if(!empty($user['id'])) {
            $this->session->set('login', $user['login']);
            $this->session->set('userdata', $user);
        }
        if(Model_Users::isLogin()) $this->redirect('/');
        $errors = [];
        if(empty($user['id']) && $this->request->post()) $errors[]='Не верно введен логин или пароль.';

        $this->template->content = View::factory('pages/auth',['errors' => $errors]);
    }
}