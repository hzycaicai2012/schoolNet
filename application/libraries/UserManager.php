<?php
/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/20
 * Time: 9:58
 */
class UserManager {
    public function isLogin() {
        return isset($_SESSION['user']);
    }

    public function getCurrentUser() {
        if ($this->isLogin()) {
            return $_SESSION['user'];
        }
        return null;
    }

    public function auth() {
        if (!isset($_SESSION['user'])) {
            redirect('/user/login');
        }
    }
}