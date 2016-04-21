<?php
/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/20
 * Time: 23:33
 */
class Auth extends CI_Controller {
    public function login() {
        if (($_SERVER['REQUEST_METHOD'] === 'POST')
            && (preg_match('/^application\/json/', $_SERVER['CONTENT_TYPE']) > 0)) {
            $str = file_get_contents('php://input');
            $_POST = json_decode($str, true);
        }
        $result = array('errno' => 0, 'msg' => 'success');
        if (!isset($this->session->user) || $this->session->user['id'] <= 0) {
            $user = $this->user_model->getUserByName($_POST['name'], $_POST['password']);
            if (!isset($user)) {
                $user = $this->user_model->getUserByEmail($_POST['name'], $_POST['password']);
            }
            if (!isset($user)) {
                $result['errno'] = -2;
                $result['msg'] = '用户名或密码错误~';
            } else {
                $this->session->user = array(
                    'name' => $user->name,
                    'nick' => $user->nick,
                    'id' => $user->id,
                    'phone' => $user->phone,
                    'email' => $user->email,
                    'admin' => $user->is_admin,
                );
                $result['errno'] = 0;
                $result['msg'] = 'success';
            }
        }
        echo json_encode($result);
    }
}