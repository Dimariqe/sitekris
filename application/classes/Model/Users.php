<?php
class Model_Users extends ORM {
    protected $_table_name = 'users';
    public function authorization($login, $password) {
        return $this->where('login', '=', $login)->and_where('password', '=', md5($password))->find()->as_array();
    }
    public static function isLogin() {
        $isLogin = Session::instance()->get('login');
        return !empty($isLogin);
    }
    public static function logout() {
        Session::instance()->destroy();
    }
}