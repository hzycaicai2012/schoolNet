<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once "BaseController.php";
/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/19
 * Time: 22:24
 */
class User extends BaseController
{
    public function _filter() {
        return array(
            '_loginFilter' => array('homepage', 'messagelist'),
        );
    }

    public function _loginFilter() {
        $user = $this->session->user;
        if (!isset($user) || $user['id'] <= 0) {
            redirect('/user/login');
        }
    }

    /**
     * login page - hzy
     */
    public function login() {
        if ($this->user->isLogin()) {
            redirect('/home/index');
        }
        $this->smarty3->assign('nav_index', 'login');
        $this->smarty3->display('user/login.html');
    }

    public function logout() {
        $this->session->user = null;
        redirect('/user/login');
    }

    public function register() {
        $this->smarty3->assign('nav_index', 'register');
        $this->smarty3->display('user/register.html');
    }

    public function homePage() {
        $this->smarty3->assign('nav_index', 'homepage');
        $id = $_GET['id'];
        if (!isset($id)) {
            redirect('/home/index');
        }
        $user = $this->session->user;
        $userInfo = $this->user_model->getUserById($user['id']);
        if (!isset($userInfo)) {
            redirect('/home/index');
        }
        $isMe = (intval($userInfo->id) === intval($id)) ? 1 : 0;
        $isFriend = $this->friend_model->isFriend($userInfo->id, intval($id)) ? 1 : 0;
        $this->smarty3->assign('is_friend', $isFriend);
        $this->smarty3->assign('is_me', $isMe);
        $this->smarty3->assign('id', $id);
        $this->smarty3->assign('user_info', $userInfo);
        $this->smarty3->display('user/home_page.html');
    }

    public function messageList() {
        $this->smarty3->assign('nav_index', 'messagelist');
        $this->smarty3->display('user/message_list.html');
    }

    public function search() {
        $this->smarty3->assign('nav_index', 'search');
        $this->smarty3->display('user/search.html');
    }
}